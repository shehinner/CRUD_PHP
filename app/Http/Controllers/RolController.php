<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rol as Rol;
use App\Models\Status as Status;

class RolController extends Controller
{
    public function index()
    {
        $statuses = Status::all();
        $roles = Rol::with('status')->get();
        return \View::make('roles/list',compact('statuses','roles'));
    }
    
    
    public function create()
    {
        $statuses = Status::all();
        return \View::make('roles/new',compact('statuses'));
    }
    public function store(Request $request)
    {
        $rol = new Rol;
        $rol->name = $request->name;
        $rol->status_id = $request->status_id; 
        $rol->save();
        return redirect('rol');
    }
    public function edit($id) {
        $rol = Rol::find($id);
        return \View::make('roles/update', compact('rol'));
    }
    public function update($id, Request $request) {
        $rol = Rol::find($id);
        $rol->name = $request->name;
        $rol->status_id = $request->status_id;
        $rol->save();
        return redirect('rol');
    }
    public function show(Request $request) {
        $roles = Rol::where('name','like','%'.$request->name.'%')->get();
        $statuses = Status::where('name','like','%'.$request->name.'%')->get();
        return \View::make('roles/list',compact('roles','statuses'));
    }
    public function destroy($id) 
    {
        $rol = Rol::find($id);
        $rol -> delete();
        return redirect()->back();
    }
}
