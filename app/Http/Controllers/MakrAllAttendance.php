<?php

namespace App\Http\Controllers;
use App\Models\Attendance;


use Illuminate\Http\Request;

class MakrAllAttendance extends Controller
{
    function index(){
    $attendance =Attendance::all()->get();
    return view('admin.attendance.index')->with('attendance',$attendance);

    }

    function markAll(Request $request){
        $attendance  = Attendance::all();
        $attendance->status=$request->get('update');
        $attendance->save();
        return back();
    }
}
