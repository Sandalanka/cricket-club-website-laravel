<?php

namespace App\Http\Controllers;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function login(Request $request){

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
    public function loginn(){

       return view('login');
        

        
    }
}
