@extends('layouts.admin')

@section('content')

<div class="container d-flex justify-content-center">
  <!--table to showcase attendance data-->

  <div class="card col-md-12">
    <div class="card-body">
      <h1 class="text-center">
        All Records
      </h1>
      <table class="table table-hover table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">Date</th>
          </tr>
        </thead>
        <tbody>
          @foreach($shows as $show)
            <tr>
              <td>{{$show->name}}</td>
              <td>{{$show->status}}</td>
              <td>{{$show->created_at}}</td>
              
            </tr>
            @endforeach

         
        </tbody>
      </table>
     {{Session::get('success')}}
    </div>


  </div>
</div>


  @endsection
