<?php
  
namespace App\Http\Controllers;
   
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
  
class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(3);
        return view('users.index',compact('users'))->with('i', (request()->input('page', 1) - 1) * 3);
    }
     
    public function create()
    {
        return view('users.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create( $request->all());
        return redirect()->route('users.index')->with('success','User created successfully.');
    }
   
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    } 
     
    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }
    
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
        ]);
        
        $user_data = $request->all();
        $user_data['password'] = Hash::make('Password');
    
        $user->update($user_data);
    
        return redirect()->route('users.index')->with('success','User updated successfully');
    }
    
    public function destroy(User $user)
    {
        $user->delete();
    
        return redirect()->route('users.index')->with('success','User deleted successfully');
    }
}