<?php

namespace App\Http\Controllers;

use App\Mail\Email;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function postEmail(Request $request){

        $array=collect($request->only(['name', 'email','subject', 'message']))->all();

        Mail::to('support@example.com')->send(new Email($array));
        return redirect()->back();

    }
}
