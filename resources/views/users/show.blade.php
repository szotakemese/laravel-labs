@extends('users.layout')
  
@section('content')
<header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Show User
            </h2>
        </div>
    </header>
    <div class="pt-4 pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4">
                <a href="{{ route('users.index') }}">      
                    <span class="relative text-black text-lg ">Back</span>
                </a>
            </div>
            
            <div class="text-lg bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
    <b>Name:</b> {{ $user->name }}</br>
    <b>Email:</b> {{ $user->email }}
</div>
        </div>
    </div>

@endsection