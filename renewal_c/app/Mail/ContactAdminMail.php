<?php

namespace App\Mail;

use App\Contacts;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * ContactAdminMail constructor.
     *
     * @param Contacts $contact
     */
    public function __construct(Contacts $contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return \App\Mail\ContactAdminMail
     */
    public function build()
    {
        $subject = '【 '.$this->contact->getText($this->contact->contact_reason_opt).' 】EPARK人間ドック：'.$this->contact->last_name.' '.$this->contact->first_name.'様よりお問い合わせがありました。';

        return $this->text('emails.contact_admin_body')->subject($subject);
    }
}
