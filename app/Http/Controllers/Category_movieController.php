<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category_movie as Category_movie;

class Category_movieController extends Controller
{
    public function index()
    {
        $category_movies = Category_movie::all();
        return \View::make('category_movies/list',compact('category_movies'));
    }
    public function create()
    {
        return \View::make('category_movies/new');
    }
    public function store(Request $request)
    {
        $category_movie = new Category_movie;
        $category_movie->category_id = $request->category_id;
        $category_movie->movie_id = $request->movie_id; 
        $category_movie->save();
        return redirect('category_movie');
    }
    public function edit($id) {
        $movie = Movie::find($id);
        return \View::make('category_movies/update', compact('category_movie'));
    }
    public function update($id, Request $request) {
        $category_movie = Category_movie::find($id);
        $category_movie->category_id = $request->category_id;
        $category_movie->movie_id = $request->movie_id;
        $category_movie->save();
        return redirect('category_movie');
    }
    public function show(Request $request) {
        $category_movies = Category_movie::where('category_id','like','%'.$request->category_id.'%')->get();
        return \View::make('category_movies/list',compact('category_movies'));
    }
    public function destroy($id) 
    {
        $category_movie = Category_movie::find($id);
        $category_movie -> delete();
        return redirect()->back();
    }
}
