@extends('users.layout')
 
@section('content')
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Users CRUD
            </h2>
        </div>
    </header>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('users.create') }}">      
                <button class="mb-4 group relative h-12 w-48 overflow-hidden rounded-lg bg-white text-lg shadow">
                    <div class="absolute inset-0 w-3 bg-amber-400 transition-all duration-[250ms] ease-out group-hover:w-full"></div>
                        <span class="relative text-black group-hover:text-white"> Create new user</span>
                </button>
            </a>
            @if ($message = Session::get('success'))
            <div>
                <div class="max-w-xs bg-indigo-300 text-sm text-white rounded-md shadow-lg mb-3" role="alert">
                    <div class="flex p-4">
                        {{ $message }}
                    </div>
                </div>
            </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white border-b border-gray-200">
                    <table class="items-center bg-transparent w-full border-collapse ">
                        <tr>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">No</th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">ID</th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Name</th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Email</th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Action</th>
                        </tr>
                        @foreach ($users as $user)
                        <tr class="hover:bg-gray-200">
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{ ++$i }}</td>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{ $user->id }}</td>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{ $user->name }}</td>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{ $user->email }}</td>
                            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                    <a class="px-2 rounded-lg bg-amber-400 mr-1" href="{{ route('users.show',$user->id) }}">Show</a>
                                    <a class="px-2 rounded-lg bg-indigo-300 mx-1" href="{{ route('users.edit',$user->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                     <button type="submit" class="px-2 rounded-lg bg-red-400 ml-1">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                @if($users->lastPage()>1)
                    <div class=" mt-2 xs:mt-0 justify-center flex mb-2">
                        <a href="{{$users->previousPageUrl()}}" class="text-sm bg-gray-200 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">Prev</a>
                        <a href="{{$users->nextPageUrl()}}" class="text-sm bg-gray-200 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">Next</a>
                        
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection