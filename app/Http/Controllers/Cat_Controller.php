<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Cat_Controller extends Controller
{
    public function index(){
        $category =DB::table('categories')->get();
        return view('Category.home' ,['category' => $category]);
    }
    public function create()
    {
        return view('Category.add');
    }
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->description = $request->description;
        $category->content = $request->content;
        $category->save();

        return redirect()->route('records.index');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('Category.edit', ['category' => $category]);
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->description = $request->description;
        $category->content = $request->content;
        $category->save();
        return redirect()->route('records.index');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('records.index');
    }
}