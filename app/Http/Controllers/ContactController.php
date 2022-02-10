<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $mail = $request->validate([
            'name' => "required|string|min:3",
            'email' => "required|email:rfc,dns,filter",
            'subject' => "required|string|max:255",
            'message' => "required|string|max:255",
            'g-recaptcha-response' => 'required|recaptchav3:contactus,0.5'
        ]);
        Mail::to('contact@abiodunsamuel.com')->send(new ContactMail($mail));
        return back()->with('status', "Your messages has been sent successfully");
    }
}
