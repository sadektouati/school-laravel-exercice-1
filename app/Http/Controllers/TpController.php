<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TpController extends Controller
{
    public function index(){
        return view('index');
    }

    public function blog(){
        return view('blog');
    }
    
    public function features(){
        return view('features');
    }

    public function pricing(){
        return view('pricing');
    }

    public function contact(){
        return view('contact');
    }

    public function sendContact(Request $request){
        return view('contact', ['donnees' => $request]);
    }

}
