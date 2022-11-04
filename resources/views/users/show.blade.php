@extends('users.layout')
  
@section('content')
<div class="text-xlg font-black">
    Show User
</div>
<a class="big-btn-p main-btn rounded-container m-bottom bg-light" href="{{ route('users.index') }}">        
    Back
</a>
<div class="text-lg">
    <b>Name:</b> {{ $user->name }}</br>
    <b>Email:</b> {{ $user->email }}
</div>
@endsection