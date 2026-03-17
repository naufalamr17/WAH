<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function visionMission()
    {
        return view('vision-mission');
    }

    public function programs()
    {
        return view('programs');
    }

    public function legal()
    {
        return view('legal');
    }

    public function contact()
    {
        return view('contact');
    }
}
