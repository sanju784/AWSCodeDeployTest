<?php


namespace App\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Pool;
use Kevinrob\GuzzleCache\CacheMiddleware;
use Kevinrob\GuzzleCache\Strategy\GreedyCacheStrategy;
use Kevinrob\GuzzleCache\Storage\DoctrineCacheStorage;
use Kevinrob\GuzzleCache\Storage\LaravelCacheStorage;
use Doctrine\Common\Cache\FilesystemCache;
use Illuminate\Support\Facades\Cache;


class ApiRequestService
{
    protected $baseUri;
    protected $client;
    protected $ttl;


    /**
     * ApiRequestService constructor.
     */
    public function __construct()
    {
        $this->baseUri = env('API');
        $this->ttl = 1 * 60;

        $this->client = new Client([
            'base_uri' => $this->baseUri,
            'handler' => $this->setCacheStrorage()
        ]);
    }


    /**
     * @param $ttl
     * @return void
     */
    public function setTTL($ttl)
    {
        // the TTL in seconds.
        $this->ttl = $ttl;
    }


    /**
     * @param $path
     * @param $param
     * @return array|mixed|object
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function req($path, $param)
    {
        $query = [
            'verify' => false,
            'query' => $this->getParam($param)
        ];

        \Debugbar::info($query['query']);

        try{
            $response = $this->client->request('GET', $path, $query);
        }
        catch (ClientException $e){
            return json_encode(['request' => $e->getRequest(), 'response' => $e->getResponse()]);
        }

        return json_decode($response->getBody());
    }


    /**
     * @param $arrayReq
     * @return array
     */
    public function reqAsync($arrayReq)
    {
        $contents = [];
        $json = [];

        $requests = function ($arrayReq){
            foreach ($arrayReq as $req){
                yield function () use ($req){
                    $query = [
                        'query' => $this->getParam($req['query'])
                    ];

                    return $this->client->requestAsync('GET', $req['path'], $query);
                };
            }
        };

        $pool = new Pool($this->client, $requests($arrayReq), [
            'concurrency' => 10,
            'fulfilled' => function($response, $index) use($arrayReq, &$contents){
                $contents[$arrayReq[$index]['label']] = [
                    'response' => $response->getBody()->getContents(),
                    'status_code' => $response->getStatusCode(),
                    'response_header' => $response->getHeaders()
                ];
            },
            'rejected' => function($reason, $index) use($arrayReq, &$contents){
                $contents[$arrayReq[$index]['label']] = [
                    'response' => '',
                    'reason' => $reason
                ];
            }
        ]);

        $promise = $pool->promise();
        $promise->wait();

        foreach ($contents as $key => $content){
            $json[$key] = json_decode($content['response']);
        }

        return $json;
    }


    /**
     * @param $param
     * @return array
     */
    private function getParam($param)
    {
        return [
            'search' => json_encode($param)
        ];
    }


    /**
     * @return HandlerStack
     */
    private function setCacheStrorage()
    {
        $stack = HandlerStack::create();
        $storageKind = env('CACHE_STORAGE');

        switch ($storageKind){
            case 'redis':
                $storage = new LaravelCacheStorage(
                    Cache::store('redis')
                );
                break;

            case 'file':
                $storage = new DoctrineCacheStorage(
                    new FilesystemCache(
                        env('CACHE_PATH_TO_FILE')
                    )
                );
                break;

            default:
                $storage = new DoctrineCacheStorage(
                    new FilesystemCache(
                        env('CACHE_PATH_TO_FILE')
                    )
                );
        }

        $stack->push(
            new CacheMiddleware(
                new GreedyCacheStrategy($storage, $this->ttl)
            ),
            'cache'
        );

        return $stack;

    }


}