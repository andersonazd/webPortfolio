<?php

namespace App\Http\Controllers;

use App\Mail\contactoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(){
        $data = ['name' => 'Anderson'];
        Mail::to('aatehortua929@gmail.com')->queue(new contactoMail($data));
    }
}
