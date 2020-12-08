<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rentail as Rentail;
use App\Models\User as User;
use App\Models\Status as Status;


class RentailController extends Controller
{
    public function index()
    {
        $users = User::all();
        $statuses = Status::all();
        $rentails = Rentail::with('status','user')->get();
        return \View::make('rentails/list',compact('statuses','users','rentails'));
    }
    public function create()
    {
        $statuses = Status::all();
        $users = User::all();
        return \View::make('rentails/new',compact('statuses','users'));
    }
    public function store(Request $request)
    {
        $rentail = new Rentail;
        $rentail->star_date = $request->star_date;
        $rentail->end_date = $request->end_date;
        $rentail->total = $request->total;
        $rentail->user_id = $request->user_id;
        $rentail->status_id = $request->status_id;
         
        $rentail->save();
        return redirect('rentail');
    }
    public function edit($id) {
        $rentail = User::find($id);
        return \View::make('rentails/update', compact('users','statuses','rentails'));
    }
    public function update($id, Request $request) {
        $rentail = Rentail::find($id);
        $rentail->star_date = $request->star_date;
        $rentail->end_date = $request->end_date;
        $rentail->total = $request->total;
        $rentail->user_id = $request->user_id;
        $rentail->status_id = $request->status_id;
       
        $rentail->save();
        return redirect('rentail');
    }
    public function show(Request $request) {
        $rentails = User::where('name','like','%'.$request->name.'%')->get();
        $users = Status::where('name','like','%'.$request->name.'%')->get();
        return \View::make('rentails/list',compact('users','statuses'));
    }
    public function destroy($id) 
    {
        $rentail = Rentail::find($id);
        $rentail -> delete();
        return redirect()->back();
    }
}
