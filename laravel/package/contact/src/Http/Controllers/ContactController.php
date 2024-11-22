<?php

namespace Imtiaze\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Imtiaze\Contact\Mail\ContactMailable;
use Imtiaze\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->all()));
        Contact::create($request->all());

        return redirect(route('contact'));
    }
}