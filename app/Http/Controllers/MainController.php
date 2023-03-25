<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }

    public function offres(){
        return view('offres');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function services(){
        return view('services');
    }
}
