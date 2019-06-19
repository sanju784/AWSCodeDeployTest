<?php

namespace App\Jobs;

use App\keisai;
use App\Mail\KeisaiAdminMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendKeisaiAdminMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $keisai;

    /**
     * SendKeisaiAdminMail constructor.
     *
     * @param \App\keisai $keisai
     */
    public function __construct(keisai $keisai)
    {
        $this->keisai = $keisai;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $adminMail = new KeisaiAdminMail($this->keisai);
        Mail::to('EP_MAIL@docknet.jp')->cc('DYM_MAIL@docknet.jp')->send($adminMail);
    }
}
