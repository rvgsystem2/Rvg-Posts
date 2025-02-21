<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller

{
    public function Login()
    {
        return view('frontend.login');
    }

    public function signup()
    {
        return view('frontend.signup');
    }

    public function home()
    {
        return view('frontend.home');
    }

    public function profile()
    {
        return view('frontend.profile');
    }

    public function support()
    {
        return view('frontend.support');
    }

    public function posts()
    {
        return view('frontend.post');
    }

    public function community()
    {
        return view('frontend.community');
    }
}
