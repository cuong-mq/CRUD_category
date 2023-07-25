<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $category = DB::table('categories')->get();
        return view('category.partials.list', ['category' => $category]);
    }
    public function create()
    {
        return view('category.partials.add');
    }
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->description = $request->description;
        $category->content = $request->content;
        $category->save();

        return redirect()->route('category.index');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.partials.edit', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->description = $request->description;
        $category->content = $request->content;
        $category->save();
        return redirect()->route('category.index');
    }
   

    public function delete($id)
    {
        $this->deleteCategoryWithPosts($id);
        return redirect()->route('category.index');
    }

    private function deleteCategoryWithPosts($id)
    {
        $category = Category::find($id);
        $category->posts()->delete();
        $category->delete();
    }
}
