<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home2Controller extends Controller
{
    //
    public function index(Request $request){
        // return $_GET['name'];
        // dd (die & dump)

        // dd($request->all());
        // dd($request);
        // return $request->pass;

        // echo $request->pass;
        // echo $request->email;

        // echo $request->get('name', 'Not provided');

        return '<form method="post" action = "'.route('contact').'"><input type="text" name = "name"> <input type="submit"></form>';
    }

    public function store (Request $request){
        return ($request->name);
    }
}
