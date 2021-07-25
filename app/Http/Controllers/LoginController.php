<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
// function view
    public function form_regist(){
        return view("akun.register");
    }

    public function form_login(){
        return view('akun.login');
    }

// function db link
    public function insert_data_user(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'nama' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'gender' => 'required',
        ]);
        $user = $request->input();
        $check_username = DB::table('user')->where("username", $user['username'])->first();
        $check_email = DB::table('user')->where("email", $user['email'])->first();
        if($check_username){
            $request->session()->flash('error', 'Username sudah terdaftar!');
            return redirect('users/regist');
        }elseif($check_email){
            $request->session()->flash('error', 'Email sudah terdaftar!');
            return redirect('users/regist');
            }
        DB::table('user')->insert([
            "nama" => $user["nama"],
            "username" => $user["username"],
            "password" => $user["password"],
            "email" => $user["email"],
            "no_telp" => $user["no_telp"],
            "gender" => $user["gender"]
        ]);
        return redirect("users/login");
    }

    public function insert_login(Request $request){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = DB::table('user')->where("username", $username)->first();
        $pass = DB::table('user')->where("password", $password)->first();
        if($user){
            if($pass){
                $request->session()->put("username",$username);
                return redirect('/home');
            }
        }
        return redirect('users/login');
        }
}
