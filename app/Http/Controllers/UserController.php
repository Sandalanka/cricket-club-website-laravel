<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function adminlogin(Request $request){

      $this->validate($request,[
          
         'email'=>'required',
         'password'=>'required',
                 ]);
    if( Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){
        return  redirect()->route('admin');
    }
    else{
        return redirect()->back();
    }
    }
        

    public function logout(){
      Auth::logout();
      Session::flush();
      return redirect('/');
  }
    }

