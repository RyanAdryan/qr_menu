<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\category;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index() {
        // $data = menu::all();
        // return view('menu.index', compact('data'));

        $data = Menu::with('category')->get();

        return view('menu.index', [
            'data' => $data,
            'title' => 'Data Menu'
        ]);

        // return view('menu.index', compact('data'));

    //     public function index(){
    //     $data = array(
    //         "title"     => "Dashboard",
    //     );
    //     return view('dashboard', $data);
    // }
    }

    // CREATE
    public function create()
    {
        $categories = Category::all();

        return view('menu.create', compact('categories'));
    }
    // store
    public function store(Request $request)
    {
        Menu::create($request->all());
        return redirect('/menu');
    }

    // EDIT
    public function edit($id)
{
    $menu = Menu::findOrFail($id);
    $categories = Category::all();

    return view('menu.edit', compact(
        'menu',
        'categories'
    ));
}

    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);

        $menu->update($request->all());

        return redirect('/menu');
    }

    public function destroy($id)
    {
        Menu::destroy($id);

        return redirect('/menu');
    }
}
