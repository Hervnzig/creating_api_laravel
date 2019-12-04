<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function store(Request $request) {
        // validate the form

        $request->validate([
            'email' => 'required|email',
            'password'=> 'required'
        ]);

        // return redirect()->route('success');
        // return redirect()->back();
        // return redirect()->back()->with('msg', 'Thanks for entering data');
        return response()->json([
            'post'=> [
                ['id', 1, 'title' => 'Herve'],
                ['id', 2, 'title' => 'Cedric'],
                ['id', 3, 'title' => 'Yves'],
                ['id', 4, 'title' => 'Mugenga'],

            ]
        ]);
    }
}
