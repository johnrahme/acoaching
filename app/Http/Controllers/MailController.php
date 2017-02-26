<?php

namespace App\Http\Controllers;

use App\Page;
use App;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use App\Mail\contact;
use Illuminate\Http\Request;

class MailController extends Controller
{

    public function send(Request $request)
    {

        $to      = 'info@acoaching.se';
        $subject = 'Kontaktad av ' . $request->input('name');
        $message = $request->input('message');
        $from = $request->input('email');
        $headers = 'From: '.$from. "\r\n" .
            'Reply-To: '.$from;

        mail($to, $subject, $message, $headers);


//        Mail::to('info@acoaching.se')->send(new Contact('John', 'Meddelande', 'john.rahme.se@gmail.com'));
        return redirect()->back()->with('message', 'Tack för ditt mail!');
    }
}
