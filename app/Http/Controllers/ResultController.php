<?php

namespace App\Http\Controllers;
use App\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function show(){
        $result=Result::all();
        return view('result',compact('result'));
    }


    public function add(){
        return view('addresult');
    }

    public function store(Request $request){
        $this->validate($request,[
            'match'=>'required',
            'date'=>'required',
            'result'=>'required'
        ]);
        $table=new Result();
        $table->match=$request['match'];
        $table->date=$request['date'];
        $table->result=$request['result'];
        $table->save();
        return redirect()->route('result');
    }

    public function delete($id){
        $result=Result::where('id',$id)->first();
        $result->delete();
        return redirect()->route('result');


    }
    public function result(){
        $result=Result::all();
        return view('resultshow',compact('result'));
    }


}
