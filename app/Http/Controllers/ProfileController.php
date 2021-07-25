<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function profile(Request $request){
        $username=$request->session()->get("username");
        $user =DB::table("user")->where("username",$username)->get();
        return view('profile.profile',['user' => $user]);
    }
}
