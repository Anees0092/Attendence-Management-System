@extends('layouts.app')

@section('content')
<span style="margin-left:90%;"><a href="{{route('users.index')}}"class="btn btn-primary ">Edit Profile</a></span>
    <form method="post" action="{{ route('index.store') }}">
        @csrf
        <select name="student_id" hidden="">
            <option>{{ Auth::user()->id }}</option>
        </select>
        <button type="submit" class="btn btn-success " name="status" value="present">Present</button>
        <a href="requestleave" class="btn btn-warning">Request Leave</a>
        <a href="attendance" class="btn btn-dark">view Attendance</a>
    </form>


    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p>{{ $message }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
    @endif

    @if ($message = Session::get('found'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <p>{{ $message }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>
    @endif
@endsection
