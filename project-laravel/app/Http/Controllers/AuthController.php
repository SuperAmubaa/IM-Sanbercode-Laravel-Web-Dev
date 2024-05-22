<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register.register');
    }

    public function home(Request $request)
    {
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $gender = $request->input('gender');
        $nationality = $request->input('nationality');
        $language = $request->input('language');
        $bio = $request->input('bio');

        return view('register.home', ['fname' => $fname, 'lname' => $lname, 'gender' => $gender, 'nationality' => $nationality, 'language' => $language, 'bio' => $bio,]);
    }
}
