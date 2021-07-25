<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    public function home(Request $request){
        $username=$request->session()->get("username");
        return view('home',["username"=>$username]);
    }
    public function detail_event(Request $request){
        $username=$request->session()->get("username");
        return view('detail_event');
    }

    public function contactus(){
        return view("contactus");
    }

    public function aboutus(){
        return view("aboutus");
    }
}

