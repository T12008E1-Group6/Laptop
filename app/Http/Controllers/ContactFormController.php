<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactFormController extends Controller
{
    // Store customer messages
    public function store(){
        $data = request() -> validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

    // Send an email
    Mail::to('test@test.com')->send(new ContactFormMail());
    return view('/contactSuccess');

    }

}
