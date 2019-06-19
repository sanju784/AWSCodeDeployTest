<?php

namespace App\Http\Controllers;

use App\Contacts;
use App\Http\Requests\ContactRequest;
use App\Jobs\SendContactAdminMail;
use App\Jobs\SendContactUserMail;
use App\Mail\ContactAdminMail;
use App\Mail\ContactUserMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(Request $request)
    {
        $contact = new Contacts();
        $contact->fill($request->all());
        $result = $contact->save();
        if ($result) {
            //user mail
            $this->dispatch(new SendContactUserMail($contact));
            //admin mail
            $this->dispatch(new SendContactAdminMail($contact));
        }

        return view('contact.finish');
    }

    /**
     * @param ContactRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function confirm(ContactRequest $request)
    {
        $contact = new Contacts();
        $contact->fill($request->all());

        return view('contact.confirm')->with('contact', $contact);
    }
}
