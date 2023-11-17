<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use App\Services\emails\MailService;

class ContactController extends Controller
{
    public function contactForm()
    {
        return view('contact.index');
    }

    public function send(ContactRequest $request, MailService $mailService)
    {
        $data = $request->validated();

        $mailSent = Mail::to('munthiromer100@gmail.com')->send(new ContactFormMail($data));

        if (!$mailSent) {
            return redirect()->back()->with('error', 'Error: Unable to send email.');
        }

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
