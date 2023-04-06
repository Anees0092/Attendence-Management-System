@extends('layouts.app')
@section('content')
<div class="container">
<div class="card-body ">
    <form action="{{ route('users.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="card" style="width: 18rem;">
            <img src={{asset(Auth::user()->image) }} class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Student Id : {{ Auth::user()->id }}</h5>
                <p class="card-text">Student Name :{{ Auth::user()->name}}</p>
                <input type="file" name="image" class="form-control" id="image">
                @error('image')
                <p class="text-danger text-sm">{{ $message }}</p>
                @enderror
                <input type="submit" class="btn btn-primary mt-3">
            </div>
          </div>
        </div>
        
        
        </form>
@endsection