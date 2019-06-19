<?php

namespace App\Jobs;

use App\keisai;
use App\Mail\KeisaiUserMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendKeisaiUserMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $keisai;

    /**
     * SendKeisaiUserMail constructor.
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
        $userMail = new KeisaiUserMail($this->keisai);
        Mail::to($this->keisai->email)->send($userMail);
    }
}
