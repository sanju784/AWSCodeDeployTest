<?php

namespace App\Mail;

use App\Contacts;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactUserMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * ContactUserMail constructor.
     *
     * @param Contacts $contact
     */
    public function __construct(Contacts $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->text('emails.contact_user_body')->subject('【EPARK人間ドック】お問い合わせを受け付けました。');
    }
}
