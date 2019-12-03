<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index(){
        return view('mail.index');
    }

    public function store(Request $request){
        // dd($request->all());
        // return($request->all());

        // validate
        $request->validate([
            'email' => 'required|email'
        ]);

    }
}
