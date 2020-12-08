<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category as Category;
use App\Models\Status as Status;

class CategoryController extends Controller
{
    public function index()
    {

        $statuses = Status::all();
        $categories = Category::with('status')->get();
        return \View::make('categories/list',compact('statuses','categories'));
    }
    public function create()
    {
        return \View::make('categories/new');
    }
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->status_id = $request->status_id;
        $category->save();
        return redirect('status');
    }
    public function edit($id) {
        $category= Category::find($id);
        return \View::make('categories/update', compact('category'));
    }
    public function update($id, Request $request) {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->status_id = $request->status_id;
        $category->save();
        return redirect('category');
    }
    public function show(Request $request) {
        $categories = Category::where('name','like','%'.$request->name.'%')->get();
        return \View::make('categories/list',compact('categories'));
    }
    public function destroy($id) 
    {
        $category = Category::find($id);
        $category -> delete();
        return redirect()->back();
    }
}
