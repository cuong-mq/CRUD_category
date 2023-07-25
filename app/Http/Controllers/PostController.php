<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $categoryId = $request->categoryId;
        $posts = Post::where('category_id', $categoryId)->get();
        return view('post.partials.list', ['post' => $posts]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('post.partials.add', ['categories'=>$categories]);
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->category_id = $request->category_id;
        $post->name = $request->name;
        $post->slug = $request->slug;
        $post->description = $request->description;
        $post->content = $request->content;
        $post->save();
        $category_id = $request->category_id;   
        return redirect()->route('post.index', ['categoryId' => $category_id]);
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.partials.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $category_id = $request->category_id;
        $post->name = $request->name;
        $post->slug = $request->slug;
        $post->description = $request->description;
        $post->content = $request->content;
        $post->save();  
     
        return redirect()->route('post.index', ['categoryId' => $category_id]);
    }

    public function delete(Request $request, $id)
    {
        $post = Post::find($id);
        $post->delete();
        $category_id = $request->category_id;
        return redirect()->back();
    }
}
