<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function home(){
        return view('homepage');
    }
    function regist(){
        return view('register');
    }

    function Login(){
        return view('login');
    }

   
}
