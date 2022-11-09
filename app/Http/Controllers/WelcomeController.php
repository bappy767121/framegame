<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        return view('frontEnd.home.homeContent');

    }

    public function about(){
        return view('frontEnd.home.about');

    }

    public function portfolio(){
        return view('frontEnd.home.portfolio');

    }

    public function package(){
        return view('frontEnd.home.package');

    }

    public function contact(){
        return view('frontEnd.home.contact');

    }
}
