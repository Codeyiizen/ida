<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('dashboard');
    }

    public function contactUs(){
        return view('contact-us');
    }

    public function pub(){ 
        return view('pub.welcome');
    }
}