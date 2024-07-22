<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class MyMenuController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $user = $request->user();

        $menus = TransactionDetail::with('transaction', 'menu.reviews')
            ->whereHas('transaction', function($query) use($user){
                $query->where('user_id', $user->id)->where('status', 'success');
            })->whereHas('menu', function($query){
                $query->where('name', 'like', '%'. request()->search .'%');
            })->latest()->paginate(3);

        // passing variabel $menus kedalam view.
        return view('admin.menu.mymenu', compact('menus'));
    }
}
