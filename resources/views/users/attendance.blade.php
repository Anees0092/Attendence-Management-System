@extends('layouts.app')

@section('content')

<div class="container d-flex justify-content-center">
  <!--table to showcase attendance data-->

  <div class="card col-md-12">
    <div class="card-body">
      <h1 class="text-center">
        My Attendance
      </h1>
      <table class="table table-hover table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Student_Id</th>
            <th scope="col">Status</th>
            <th scope="col">Date</th>
            <th scope="col">Day</th>
          </tr>
        </thead>
        <tbody>
          @foreach($show as $show)
            <tr>
              <td>{{$show->student_id}}</td>
              <td>{{$show->status}}</td>
              <td>{{$show->created_at}}</td>
              <td>{{$show->created_at->format('l')}}</td>
              
            </tr>
            @endforeach

         
        </tbody>
      </table>
     {{Session::get('success')}}
    </div>


  </div>
</div>


  @endsection
