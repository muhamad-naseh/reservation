<?php

namespace App\Http\Controllers\Landing;

use App\Http\Requests\CartRequest;
use App\Models\Cart;
use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index(Request $request)
    {
        // tampung data cart dari user yang sedang login kedalam variabel $carts.
        $carts = $request->user()->carts()->get();


        // passing variabel $carts, $total, $user kedalam view.
        return view('landing.cart.index', compact('carts'));
    }

    public function store(Request $request, Menu $menu)
    {
        /*
            masukan data baru cart dengan "menu_id" sesuai dengan variabel $menu, karena disini kita menggunakan
            updateOrCreate maka jika user yang sedang login pernah memasukan menu kedalam cart maka data hanya akan diupdate jika belum maka akan memasukan data baru.
        */
        $menu->carts()->updateOrCreate([
            'user_id' => $request->user()->id,
            'menu_id' => $menu->id,
        ],[
            'user_id' => $request->user()->id,
            'price' => $menu->price - ($menu->price * $menu->discount / 100),
        ]);

        // kembali kehalaman cart/index dengan membawa toastr.
        return back()->with('toast_success', 'Item berhasil ditambahkan ke cart');
    }

    public function update(CartRequest $request, Cart $cart) {

        $cart->update($request->validated());

        return back()->with('toast_success', 'Item berhasil ditambahkan');
    }

    public function delete(Cart $cart)
    {
        // hapus data cart berdasarkan id.
        $cart->delete();

        // kembali kehalaman sebelumnya dengan membawa toastr.
        return back()->with('toast_success', 'Item berhasil dihapus dari cart');
    }
}
