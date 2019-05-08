<?php

namespace App\Http\Controllers;
use App\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function login(){
        $schedule= Schedule::all();
        return view('admin',compact('schedule'));
    }

    public function addschedule(){
        return view('scheduleadd');
    }

    public function store(Request $request){
        $table=new Schedule();
        $this->validate($request,[
            'match'=>'required',
            'date'=>'required',
            'ground'=>'required'
        ]);
        $table->match=$request['match'];
        $table->date=$request['date'];
        $table->ground=$request['ground'];
        $table->save();
        return redirect()->route('admin');
    }

    public function delete($id){
        $schedule=Schedule::where('id',$id)->first();
        $schedule->delete();
        return redirect()->route('admin');


    }
    public function schedule(){
        $schedule= Schedule::all();
        return view('schedule',compact('schedule'));
    }
}
