<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function contactForm()
    {
        return view('contact.index');
    }

    public function send(ContactRequest $request)
    {
        $data = $request->validated();

        $message = view('emails.contact', compact('data'))->render();

        // Set up email headers
        $to = 'munthiromer100@gmail.com';
        $subject = $data['subject'];
        $headers = 'From: your-email@example.com';

        $mailSent = mail($to, $subject, $message, $headers);

        if (!$mailSent) {
            return redirect()->back()->with('error', 'Error: Unable to send email.');
        }
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
