@extends('users.layout')
 
@section('content')
    <div class="text-xlg font-black">
        Users CRUD
    </div>
    <a class="big-btn-p main-btn rounded-container m-bottom bg-light" href="{{ route('users.create') }}">        
        Create new user
    </a>
    
    @if ($message = Session::get('success'))
     <div class="rounded-container m-bt big-btn-p bg-green m-bottom">
        {{ $message }}
    </div>
    @endif
   
    <table>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                    <a class="sm-btn rounded-container px-8 bg-light" href="{{ route('users.show',$user->id) }}">Show</a>
                    <a class="sm-btn rounded-container px-8 bg-green" href="{{ route('users.edit',$user->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="sm-btn rounded-container px-8 bg-red btn-txt">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    @if($users->lastPage()>1)
        <div class="paginator mt-8">
            <a href="{{$users->previousPageUrl()}}" class="sm-btn rounded-container p-3 bg-light m-hor"><</a>
            <a href="{{$users->nextPageUrl()}}" class="sm-btn rounded-container p-3 bg-light m-hor">></a>
        </div>
    @endif
@endsection