<?php

namespace App\Http\Controllers;
use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $canMark=true;
        $currentDate=date('Y-m-d');
        // echo $currentDate;
        $attendance=Attendance::where('student_id',auth()->user()->id)->get();
        foreach ($attendance as $at) {
           if($currentDate==date('Y-m-d',strtotime($at->created_at))){
            $canMark=false;
            return back()->with('found','Attendance marked already');
            break;
           }       

            }
       if($canMark){
       $add=Attendance::create([
        'status'=>$request->input('status'),
        'student_id'=>$request->input('student_id'),

        ]);
        return redirect('home')->with('success','Attendance marked successfully');    
   }
   else{
    
   }
   return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
