@extends('users.layout')
   
@section('content')
    <div class="text-xlg font-black">
        Edit User
    </div>
    <a class="big-btn-p main-btn rounded-container m-bottom bg-light" href="{{ route('users.index') }}">        
        Back
    </a>

    @if ($errors->any())
    <div class="rounded-container p-6 m-bt bg-red">   
        @foreach ($errors->all() as $error)
            {{ $error }}<br/>
        @endforeach
    </div>
    @endif
   
    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Name">
        </div>
            
        <div class="form-group">
            <strong>E-mail:</strong>
            <input class="form-control" type="email" name="email" value="{{ $user->email }}" placeholder="Email"></textarea>
        </div> 
        
        <button type="submit" class="rounded-container main-btn bg-green big-btn-p m-vert btn-txt">Submit</button>
</form>
@endsection