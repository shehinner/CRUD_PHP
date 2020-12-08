<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as User;
use App\Models\Status as Status;
use App\Models\Rol as Rol;

class UserController extends Controller
{
    public function index()
    {
        $roles = Rol::all();
        $statuses = Status::all();
        $users = User::with('status','role')->get();
        return \View::make('users/list',compact('statuses','roles','users'));
    }
    public function create()
    {
        $statuses = Status::all();
        $roles = Rol::all();
        return \View::make('users/new',compact('statuses','roles'));
    }
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->status_id = $request->status_id;
        $user->role_id = $request->role_id;
         
        $user->save();
        return redirect('user');
    }
    public function edit($id) {
        $user = User::find($id);
        return \View::make('users/update', compact('roles','statuses','user'));
    }
    public function update($id, Request $request) {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->status_id = $request->status_id;
        $user->role_id = $request->role_id;
        $user->save();
        return redirect('user');
    }
    public function show(Request $request) {
        $users = User::where('name','like','%'.$request->name.'%')->get();
        $statuses = Status::where('name','like','%'.$request->name.'%')->get();
        return \View::make('users/list',compact('users','statuses'));
    }
    public function destroy($id) 
    {
        $user = User::find($id);
        $user -> delete();
        return redirect()->back();
    }
}
