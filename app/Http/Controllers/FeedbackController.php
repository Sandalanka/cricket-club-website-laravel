<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
class FeedbackController extends Controller
{
    public function getfeedback(){
$post=Feedback::all();
        return view('feedback',compact('post'));
    }

    public function post(Request $request){
        $post=new Feedback();
        $this->validate($request,[
            'name'=>'required',
            'body'=>'required'
        ]);
        $post->name=$request['name'];
        $post->body=$request['body'];
        $post->save();
        return redirect()->route('feedback');
    }
}
