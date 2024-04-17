<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    function regi(){
        return view('validate');
    }

    // function reg(Request $request){
    //       $request->validate([
    //         'name'=> ['required'],
    //         'email'=> ['required'],
    //         'password'=> ['required','confirmed'],
    //    ]);
    //     echo "<pre>";
    //     print_r ($request->all());
    // }
    function reg(Request $request){
        $IncomingFields = $request->validate([
             'name'=> ['required'],
             'email'=> ['required'],
             'password'=> ['required','confirmed'],
        ]);
        User::create($IncomingFields);
        return view('homepage');
    }
    function log(Request $request){
        $IncomingFields = $request->validate([
             'name'=> ['required'],
             'password'=> ['required'],
        ]);
    
      if(auth()->attempt([
        'name'=>$IncomingFields['name'],
          'password'=>$IncomingFields['password'],
      ]))
      
    return view('validate');
    else{
        return ('<h1>Login Failed!!!!</h1>');
    }

  

}
}