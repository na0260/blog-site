<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create()
    {
        return view('backend.user.create');
    }
    public function manage()
    {
        $users = User::all();
        return view('backend.user.manage',compact('users'));
    }
    public function store(Request $request)
    {
        $user                        = new User;
        $user->name                  = $request->name;
        $user->email                 = $request->email;
        $user->password              = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('msg','A new User has been added successfully');
    }
    public function delete($userId)
    {
        $user                        = User::find($userId);
        $user->delete();
        return redirect()->back()->with('msg','User has been removed successfully');

    }
    public function edit($userId)
    {
        $user                        = User::find($userId);
        return view('backend.user.edit',['user'=>$user]);

    }
    public function update(Request $request,$userId)
    {
        
        $user                        = User::find($userId);
        $user->name                  = $request->name;
        $user->email                 = $request->email;
        $user->password              = Hash::make($request->password);
        $user->save();
        return redirect()->route('user.manage')->with('msg','User has been updated successfully');

    }
}
