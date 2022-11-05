@extends('users.layout')
   
@section('content')
<header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit User
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

            @if ($errors->any())
            <div>
                <div class="max-w-xs bg-red-400 text-sm text-white rounded-md shadow-lg mb-3" role="alert">
                    <div class="flex p-4">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br/>
                    @endforeach
                    </div>
                </div>
            </div>
            @endif
            
            <form action="{{ route('users.update',$user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group flex gap-6 mb-6 mt-8">
                    <div class="basis-1/4">
                        <div class="mb-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                            <input type="text" value="{{ $user->name }}" id="name" name="name" placeholder="Name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-400 focus:border-amber-400 block w-full p-2.5">
                        </div>
                        <div class="mt-2">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="email" value="{{ $user->email }}" id="email" name="email" placeholder="Email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-amber-400 focus:border-amber-400 block w-full p-2.5">
                        </div>      
                    </div>
                </div>  
                <button class="my-4 group relative h-12 w-48 overflow-hidden rounded-lg bg-white text-lg shadow" type="submit">
                    <div class="absolute inset-0 w-3 bg-amber-400 transition-all duration-[250ms] ease-out group-hover:w-full"></div>
                        <span class="relative text-black group-hover:text-white"> Submit</span>
                </button>
            </form>
        </div>
    </div>
@endsection