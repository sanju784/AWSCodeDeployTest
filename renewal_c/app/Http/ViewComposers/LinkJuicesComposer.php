<?php


namespace App\Http\ViewComposers;

use App\Enums\RegionPref;
use App\Service\ApiRequestService;
use Illuminate\Contracts\View\View;
use App\Enums\Pref;
use App\Enums\PrefId;
use App\Enums\CourseCategory;
use App\Enums\Ages;
use App\Enums\City;


class LinkJuicesComposer
{

    /**
     * @var string
     */
    protected $region;
    protected $pref;
    protected $city;
    protected $cat;
    protected $age;
    protected $Api;
    protected $paramPref;
    protected $paramCat;
    protected $maxNum;

    public function __construct(ApiRequestService $apiRequestService)
    {
        $this->cat  = CourseCategory::toArray();
        $this->age  = Ages::toArray();
        $this->region = new RegionPref();
        $this->pref = new PrefId();
        $this->city = new City();
        $this->Api = $apiRequestService;
        $this->Api->setTTL(60 * 60 * 24 * 360); // 360days
        $this->maxNum = 18;
    }


    /**
     * Bind data to the view.
     * @param View view
     * @return void
     */
    public function compose(View $view)
    {
        $_controllerVal = $view->getData();

        if (array_key_exists('paramLinkJuice', $_controllerVal))
        {
            $paramPref = (array_key_exists('pref',  $_controllerVal['paramLinkJuice'])) ? $_controllerVal['paramLinkJuice']['pref'] : null;
            $paramCat = (array_key_exists('cat',  $_controllerVal['paramLinkJuice'])) ? $_controllerVal['paramLinkJuice']['cat'] : 'all';
        }

        $link = [
            $this->getCourseList($paramPref),
            $this->getAgeList($paramPref, $paramCat)
        ];

        if ($paramPref != ''){
            $link[] = $this->getRouteList($paramPref, $paramCat, $this->maxNum);
            $link[] = $this->getCityList($paramPref, $paramCat, $this->maxNum);
            $link[] = $this->getNearPrefList($paramPref, $paramCat);
        }


        $view->with(['linkJuice' => $link]);
    }


    /**
     * 「人間ドック・がん検診を探す」
     *
     * @param $paramPref
     * @return array
     */
    private function getCourseList($paramPref)
    {
        $link = [];
        foreach ($this->cat as $path => $label)
        {
            if ($path == 'all') continue;
            $link['人間ドック・がん検診を探す'][] = ['href' => "/{$path}/{$paramPref}", 'text' => $label];
        }

        return $link;
    }


    /**
     * 「人間ドックを年代別で探す」
     *
     * @param $paramPref
     * @param $paramCat
     * @return array
     */
    private function getAgeList($paramPref, $paramCat)
    {
        $link = [];
        foreach ($this->age as $key => $val){
            $link['人間ドックを年代別で探す'][] = ['href' => "/{$paramCat}/{$paramPref}?age={$val}", 'text' => "{$val}代"];
        }

        return $link;
    }


    /**
     * 「人間ドックを沿線・駅から探す」
     *
     * @param $paramPref
     * @param $paramCat
     * @param $maxNum
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    private function getRouteList($paramPref, $paramCat, $maxNum)
    {
        $link = [];
        $prefId = (string)$this->pref->getID($paramPref);
        $railData = $this->Api->req('route/', ['place_code' => $prefId]);
        $rails = collect($railData->place->rails)->sortByDesc('count');

        foreach ($rails as $rail)
        {
            if ($maxNum < 1) break;
            $link['人間ドックを沿線・駅から探す'][] = ['href' => "/{$paramCat}/{$paramPref}/{$rail->rail_no}", 'text' => $rail->rail_name];
            $maxNum--;
        }

        return $link;
    }


    /**
     * 「人間ドックを市区町村で探す」
     *
     * @param $paramPref
     * @param $paramCat
     * @param $maxNum
     * @return array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    private function getCityList($paramPref, $paramCat, $maxNum)
    {
        $link = [];
        $prefId = (string)$this->pref->getID($paramPref);
        $cityData = $this->Api->req('place/', ['place_code' => $prefId]);
        $cities = collect($cityData->place->districts)->sortByDesc('count');

        foreach ($cities as $city)
        {
            if ($maxNum < 1) break;
            $link['人間ドックを市区町村で探す'][] = ['href' => "/{$paramCat}/{$paramPref}/{$this->city->city(Pref::getValue($paramPref), $city->district_name)}", 'text' => $city->district_name];
            $maxNum--;
        }

        return $link;
    }


    /**
     * 「近くの都道府県で探す」
     *
     * @param $paramPref
     * @param $paramCat
     * @return array
     */
    private function getNearPrefList($paramPref, $paramCat)
    {
        $link = [];
        $regionPrefs = $this->region->region($paramPref);
        unset($regionPrefs[$paramPref]);

        foreach ($regionPrefs as $path => $label)
        {
            $link['近くの都道府県で探す'][] = ['href' => "/{$paramCat}/{$path}", 'text' => $label];
        }

        return $link;
    }
}