<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class ContactController extends Controller
{
    public function send()
    {
        Mail::to('dgedai2007@yandex.ru')->send(
            new TestMail()
        );
        return view('send');
    }
}
