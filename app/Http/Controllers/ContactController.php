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

        // mail(to:'munthiromer100@gmail.com',subject:'test contact mail',message:'hello');
        Mail::to('munthiromer100@gmail.com')->send(new ContactFormMail($data));
        
        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
