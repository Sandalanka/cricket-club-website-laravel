<?php

namespace App\Http\Controllers;
use App\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PlayerController extends Controller
{
    public function getplayer(){
        $player=Player::all();
        return view('player.teamplayer',['player'=>$player]);
            }

            public function show(){
                $player=Player::all();
                return view('team',compact('player'));
                    }

                    public function login(Request $request){
                        $data=new Player();
                        $data=$request->only('email','password');
                         if(Auth::attempt($data)){
                            return redirect()->route('admin');
                         }
                         return redirect()->back();
                       }

                        public function loginadmin(){
                            
                            return view('login');
                                }
                       
                     }

