<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        return view('admin.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create_user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
       $user = $request->validate([
            'name' =>'required|min:5|max:15',
            'email' =>'required|email|unique:users',
            'password' => 'required',
            'phone' =>'required',
         ] , 
         [
            'name.required' => 'Name is required',
            'name.min' => 'Name must be at least 5 characters',
            'name.max' => 'Name cannot be more than 15 characters',
            'email.required' => 'Email is required',
            'email.email' => 'Email must be a valid email',
            'phone.required' => 'Phone is required',
            'password.min' => 'Password must be at least 8 characters',
            'password.max' => 'Password cannot be more than 15 characters',
         ]
        );
        User::create($user);
        return redirect()->route('View_Users');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id) ; 
        return view('admin.edit_user' , compact('user')) ;  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated_user = $request->validate(
            [
                'name' => 'required|min:5|max:20' ,
                'email' =>'required|email|unique:users',
                'password' => 'required',
                'phone' =>'required|numeric', 
            ]  , 
            [
                'name.required' => 'Name is required',
                'name.min' => 'Name must be at least 5 characters',
                'name.max' => 'Name cannot be more than 20 characters',
                'email.required' => 'Email is required' , 
                'email.required' => 'Email is Already  Exist ' , 
                'password.required' => 'Password is required',
                'phone.required' => 'Phone is required',
                'phone.numeric' => 'Phone must be a valid phone number' ,
            ]

        ) ;
 
        $user = User::find($id);
        $user->name = $updated_user['name'];
        $user->email = $updated_user['email'];
        $user->password = $updated_user['password'];
        $user->phone = $updated_user['phone'];
        $user->save();
        return redirect()->route('View_Users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete() ;
        
        return redirect()->route('View_Users') ;
    }
}
