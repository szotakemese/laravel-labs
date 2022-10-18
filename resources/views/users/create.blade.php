@extends('users.layout')
  
@section('content')
    <div class="text-xlg font-black">
        Add New User
    </div>
    <a class="big-btn-p bg-light main-btn rounded-container m-bottom" href="{{ route('users.index') }}">        
        Back
    </a>
            

    @if ($errors->any())
    <div class="rounded-container p-6 m-bt bg-red">   
        @foreach ($errors->all() as $error)
        {{ $error }}<br/>
        @endforeach
    </div>
    @endif
   
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <strong>Password:</strong>
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="form-group">
            <strong>E-mail:</strong>
            <input class="form-control" type="email" name="email" placeholder="Email"></textarea>
        </div> 
            
        <button type="submit" class="rounded-container main-btn bg-green big-btn-p m-vert btn-txt">Submit</button>
    </form>
@endsection