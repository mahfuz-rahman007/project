<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index(){
      return view('font.home.home-content');
    }

    public function support(){
      return view('font.support.support-content');
    }
}
