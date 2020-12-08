<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie as Movie;
use App\Models\User as User;
use App\Models\Status as Status;

class MovieController extends Controller
{
    public function index()
    {
        $users = User::all();
        $statuses = Status::all();
        $movies = Movie::with('statuses','users')->get();
        return \View::make('movies/list',compact('statuses','users','movies'));
    }
    public function create()
    {
        return \View::make('movies/new');
    }
    public function store(Request $request)
    {
        $movie = new Movie;
        $movie->name = $request->name;
        $movie->description = $request->description; 
        $movie->user_id = $request->user_id; 
        $movie->status_id = $request->status_id; 
        $movie->save();
        return redirect('movie');
    }
    public function edit($id) {
        $movie = Movie::find($id);
        return \View::make('movies/update', compact('movie'));
    }
    public function update($id, Request $request) {
        $movie = Movie::find($id);
        $movie->name = $request->name;
        $movie->description = $request->description;
        $movie->user_id = $request->user_id; 
        $movie->status_id = $request->status_id;
        $movie->save();
        return redirect('movie');
    }
    public function show(Request $request) {
        $movies = Movie::where('name','like','%'.$request->name.'%')->get();
        return \View::make('movies/list',compact('movies'));
    }
    public function destroy($id) 
    {
        $movie = Movie::find($id);
        $movie -> delete();
        return redirect()->back();
    }
}
