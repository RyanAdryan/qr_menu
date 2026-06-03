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

        // $data = Menu::with('category')->get();
        $data = Category::with('menus')->get();
        // $data = Menu::with('category')->get()->groupBy('category.name');

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
    // public function store(Request $request)
    // {
    //     Menu::create($request->all());
    //     return redirect('/menu');
    // }

    public function store(Request $request)
{
    $data = $request->all();

    if ($request->hasFile('image')) {

        $path = $request->file('image')
                        ->store('menus', 'public');

        $data['image'] = $path;
    }

    Menu::create($data);

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

    $data = $request->except('image');

    if ($request->hasFile('image')) {

        $data['image'] = $request->file('image')
                                ->store('menus', 'public');
    }

    $menu->update($data);

    return redirect('/menu');
}
    // public function update(Request $request, $id)
    // {

    //     $data = $request->all();

    //     if ($request->hasFile('image')) {

    //         $path = $request->file('image')
    //                         ->store('menus', 'public');

    //         $data['image'] = $path;
    //     }

    //     $menu->update($data);
    //     // $menu = Menu::findOrFail($id);

                
    //     // $menu->update($request->all());

    //     // return redirect('/menu');
    // }

    public function destroy($id)
    {
        Menu::destroy($id);

        return redirect('/menu');
    }
}
