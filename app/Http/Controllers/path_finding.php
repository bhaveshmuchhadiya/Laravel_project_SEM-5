<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class path_finding extends Controller
{
    public function index(){
        return view('header').view('index').view('footer');
    }
    public function contact(){
        return view('header').view('contact').view('footer');
    }
}
