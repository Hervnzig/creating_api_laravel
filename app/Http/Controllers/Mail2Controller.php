<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\OrderShipped;

class Mail2Controller extends Controller
{
    public function index(){
        $user = "john@example.com";
        Mail::to($user)->send(new OrderShipped);

    }
}
