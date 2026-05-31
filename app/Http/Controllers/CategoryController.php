<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $data = category::all();
        return view('category.index', compact('data'));
    }
    // CREATE
    public function create()
        {
        return view('category.create');
        }
        public function store(Request $request)
        {
            Category::create($request->all());
            return redirect('/category');
        }
    // EDIT
    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit', compact('category'));
        }
        public function update(Request $request, $id)
        {
        Category::find($id)->update($request->all());
        return redirect('/category');
    }
    // HAPUS
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('/category');
    }


}
