<?php

namespace App\Services\emails;

class MailService
{
    public function sendContactMessage(array $data)
    {
        $message = view('emails.contact', compact('data'))->render();
        $to = 'munthiromer100@gmail.com';
        $subject = $data['subject'];
        $fromEmail = $data['email'];

        $headers = [
            'Content-type: text/html; charset=UTF-8',
            'From: ' . $fromEmail,
        ];

        $mailSent = mail($to, $subject, $message, implode("\r\n", $headers));

        return $mailSent;
    }
    
}
