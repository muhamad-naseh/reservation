<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $menus = Menu::latest()->paginate(10);

        return view('member.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('member.menu.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MenuRequest $request)
    {
        // tampung request file image kedalam variable $image.
        $image = $request->file('image');
        // request yang telah kita tampung kedalam variabel, kita masukan kedalam folder public/menu.
        $image->storeAs('public/menu', $image->hashName());

        Menu::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'image' => $request->file('image') ? $image->hashName() : null,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        return redirect(route('member.menu.index'))->with('toast_success', 'Menu Created');

    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        return view('member.menu.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        // tampung seluruh data category kedalam variabel $categories.
        $categories = Category::all();

        // passing variabel $categories dan $menu kedalam view.
        return view('member.menu.edit', compact('categories', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MenuRequest $request, Menu $menu)
    {
        $menu->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        if($request->file('image')){
            // hapus image menu yang sebelumnya.
            Storage::disk('local')->delete('public/menu/'.basename($menu->image));
            // tampung request file image kedalam variabel $image.
            $image = $request->file('image');
            // request yang telah kita tampung kedalam variabel kita masukan kedalam folder public/menu.
            $image->storeAs('public/menu', $image->hashName());
            // update data menu image berdasrkan id.
            $menu->update([
                'image' => $image->hashName(),
            ]);
        }

        return redirect(route('member.menu.index'))->with('toast_success', 'Menu Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        // hapus image menu berdasarkan id
        Storage::disk('local')->delete('public/menu/'.basename($menu->image));

        // hapus data menu bedasarkan id
        $menu->delete();

        // kembali kehalaman sebelumnya dengan membawa toastr
        return back()->with('toast_success', 'Menu Deleted');
    }
}
