<?php

namespace App\Mail;

use App\keisai;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class KeisaiUserMail extends Mailable
{
    use Queueable, SerializesModels;
    public $keisai;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(keisai $keisai)
    {
        $this->keisai = $keisai;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->text('emails.keisai_admin_body')->subject('【EPARK人間ドック】お問い合わせを受け付けました。');
    }
}
