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

    public function disclaimer(){
        return view('disclaimer');
    }

    public function developed(){
        return view('developed');
    }

    public function healthStatus(){
        return view('health-status');
    }

    public function pub(){ 
        return view('pub.welcome');
    }

    public function ironDeficiencyAnaemia(){
        return view('iron-deficiency-anaemia');
    }
    
    public function yogaPosesManagingAnaemia(){
        return view('yoga-poses-managing-anaemia');
    }

    public function diseaseManagementThroughDiet(){
        return view('disease-management-through-diet');
    }

    
}