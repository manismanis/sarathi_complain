<?php

namespace App\Http\Controllers\backend;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends BackendController
{
    public function index()
    {
//        $this->data('mailData', WelcomeMail::all());
//
//
//        Mail::to('shresthamanees@gmail.com')->send(new WelcomeMail());

    }

    public function sendMail(Request $request, $criteria)
    {
        $data['user_id'] = $request->email;

        $order = WelcomeMail::findOrFail($criteria);

        // Ship order...

        Mail::to($request->user())->send(new WelcomeMail($order));


    }
}
