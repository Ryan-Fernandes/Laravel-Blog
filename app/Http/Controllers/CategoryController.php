<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

    public function __construct()
    {   
        $this->middleware('auth');
    }

    public function index()
    {
        if(\Gate::allows('isAdmin')){
            $category = Category::all();
            return view('category.index',compact('category'));
        }
        else{
            abort(403);
        }
        
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => ['required','min:4'],
        ]);
        Category::create($attributes);
        return redirect('category');
    }
 
    public function edit(Category $category)
    {
        if(\Gate::allows('isAdmin')){
            return view('category.edit',compact('category'));
        }
        else{
            abort(403);
        }
    }

    public function update(Request $request, Category $category)
    {
        $category->update(request(['title']));
        return redirect('/category');
    }

    public function destroy(Category $category)
    {
        if(\Gate::allows('isAdmin')){
            $category->delete();
            return redirect('/category');
        }
        else{
            abort(403);
        }
        
    }
}
