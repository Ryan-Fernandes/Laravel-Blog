<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Filesystem\Filesystem;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function __construct()
    {   
        $this->middleware('auth');
    }

    public function index()
    {   
        $post = Post::paginate(2);
        return view('blog.index',compact('post'),compact('category'));
    }

    public function create()
    {
        $category = Category::all();
        return view('blog.create',compact('category'));
    }

    
    public function store(Request $request)
    {      

        $attributes = $request->validate([
            'title' => ['required','min:4'],
            'category_id' => 'required',
            'description' => 'required',
            'image'=> 'required', 
        ]);

        $attributes['author_id'] = auth()->id();

        if($file = $request->file('image')){
          $name = $file->getClientOriginalName();
          if($file->move('images',$name)){
            $attributes['image'] = $request->file('image')->getClientOriginalName();
            }  
        };
        
        Post::create($attributes);
        return redirect('/post');
        
    }

    public function show(Post $post)
    {
        $category = Category::all();
        return view('blog.show',compact('post','category'));
    }

    public function edit(Post $post)
    {
        $category = Category::all();
        return view('blog.edit',compact('post','category'));
    }

    public function update(Request $request, Post $post)
    {   
        $attributes = $request->validate([
            'title' => ['required','min:4'],
            'category_id' => ['required'],
            'description' => ['required'],
            'image'=> ['required'], 
        ]);
        $attributes['author_id'] = auth()->id();
        

        if($file = $request->file('image')){
          $name = $file->getClientOriginalName();
          if($file->move('images',$name)){
            $attributes['image'] = $request->file('image')->getClientOriginalName();
            }  
        };
 
        $post->update($attributes);
        return redirect('/post');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/post');
    }

    public function byName(Post $post,$author)
    {
        $post = Post::whereAuthorId($author)->paginate(2);

        return view('blog.byname',compact('post'),compact('category'));
    }
    public function byTag(Post $post,$author)
    {
        $post = Post::whereCategoryId($author)->paginate(2);

        return view('blog.byname',compact('post'),compact('category'));
    }
}