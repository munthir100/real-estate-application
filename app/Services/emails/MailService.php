<?php

namespace App\Services\emails;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class MailService
{
    public function sendContactMessage(array $data)
    {
        $mailSent = Mail::to('munthiromer100@gmail.com')->send(new ContactFormMail($data));
        // $message = view('emails.contact', compact('data'))->render();
        // $to = 'munthiromer100@gmail.com';
        // $subject = $data['subject'];
        // $fromEmail = $data['email'];

        // $headers = [
        //     'Content-type: text/html; charset=UTF-8',
        //     'From: ' . $fromEmail,
        // ];

        // $mailSent = mail($to, $subject, $message, implode("\r\n", $headers));

        return $mailSent;
    }
    
}
