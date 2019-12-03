<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home2Controller extends Controller
{
    //
    public function index(Request $request){
        // $user = "herve Musangwa";
        // return view('home.index', ['user' => $user]);

        /* // simmirarilly this also works
        $user = "herve Musangwa";
        return view('home.index')->with('user', $user);
        */

        $data = [
            'Herve',
            'Musangwa',
            'Altimer'
        ];

        return view('home.index', compact('data'));
    }

    public function store (Request $request){
        return ($request->name);
    }
}
