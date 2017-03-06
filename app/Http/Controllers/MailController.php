<?php

namespace App\Http\Controllers;

use App\Page;
use App;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;
use App\Mail\contact;
use Illuminate\Http\Request;
use Validator;

class MailController extends Controller
{

    public function send(Request $request)
    {
        $messages = [
            'required' => 'The :attribute field is required.',
            'min' => 'The :attribute must be minimum :min characters'
        ];

        $v = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ], $messages);

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }


//        $to      = 'info@acoaching.se';
//        $subject = 'Kontaktad av ' . $request->input('name');
//        $message = $request->input('message');
//        $from = $request->input('email');
//        $headers = 'From: '.$from. "\r\n" .
//            'Reply-To: '.$from;
//
//        mail($to, $subject, $message, $headers);


//        Mail::to('info@acoaching.se')->send(new Contact('John', 'Meddelande', 'john.rahme.se@gmail.com'));
        return redirect()->back()->with('message', 'Tack för ditt mail!');
    }
}
