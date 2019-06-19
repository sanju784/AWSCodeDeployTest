<?php

namespace App\Mail;

use App\keisai;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KeisaiAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public $keisai;

    /**
     * KeisaiAdminMail constructor.
     *
     * @param \App\keisai $keisai
     */
    public function __construct(keisai $keisai)
    {
        $this->keisai = $keisai;
    }

    /**
     * @param \App\keisai $keisai
     * @return \App\Mail\KeisaiAdminMail
     */
    public function build(keisai $keisai)
    {
        $subject = '【 '.$this->keisai->getText($this->keisai->keisai_reason_opt).' 】EPARK人間ドック：'.$this->keisai->company_name.'の'.$this->keisai->name.'様よりお問い合わせがありました。';

        return $this->text('emails.keisai_admin_body')->subject($subject);
    }
}
