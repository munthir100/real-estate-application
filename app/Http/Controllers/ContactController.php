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
        $to = 'munthiromer100@gmail.com';
        $subject = $data['subject'];
        $fromEmail = $data['email'];

        $headers = [
            'Content-type: text/html; charset=UTF-8',
            'From: ' . $fromEmail,
        ];

        // Mail it
        $mail = mail($to, $subject, $message, implode("\r\n", $headers));

        if (!$mail) {
            return redirect()->back()->with('error', 'Error: Unable to send email.');
        }

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
