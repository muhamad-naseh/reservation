<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() : View
    {
        /*
            tampung seluruh data category kedalam variabel $categories,
            selanjutnya kita pecah data category yang kita tampilkan hanya 10 per halaman
            dengan urutan terbaru.
        */
        $categories = Category::latest()->paginate(10);

        // passing varibel $categories kedalam view.
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() : View
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request) : RedirectResponse
    {

        // masukan data baru category kedalam database.
        Category::query()->create($request->validated());

        // kembali kehalaman admin/category/index dengan membawa toastr.
        return redirect(route('admin.category.index'))->with('toast_success', 'Category Created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category) : View
    {
        // passing varibel $category kedalam view.
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category) : RedirectResponse
    {
        // update data category berdasarkan id.
        $category->update([
            'name' => $request->name,
        ]);

        // kembali kehalaman admin/category/index dengan membawa toastr.
        return redirect(route('admin.category.index'))->with('toast_success', 'Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category) : RedirectResponse
    {
        // hapus data category berdasarkan id.
        $category->delete();

        // kembali kehalaman sebelumnya dengan membawa toastr.
        return back()->with('toast_success', 'Category Deleted');
    }
}
