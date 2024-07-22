<?php

namespace App\Http\Controllers\Landing;

use App\Models\Menu;
use App\Models\Review;
use App\Models\Transaction;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index()
    {
        /*
            tampung semua data menu kedalam variabel $menus, kemudian kita memanggil relasi menggunakan withcount,
            selanjutnya pada saat melakukan pemanggilan relasi details yang kita ubah namanya menjadi enrolled, disini kita melakukan sebuah query untuk mengambil data transaksi yang memiliki status "success", disini kita juga menambahkan method search yang kita dapatkan dari sebuah trait hasScope, dan juga kita urutkan datanya dari yang paling baru.
        */
        $menus = Menu::withCount(['reviews', 'details as enrolled' => function($query){
            $query->whereHas('transaction', function($query){
                $query->where('status', 'success');
            });
        }])->search('name')->latest()->get();

        // passing variabel $menus kedalam view.
        return view('landing.menu.index', compact('menus'));
    }

    public function show(Menu $menu)
    {
        /*
            tampung jumlah data transaction yang memiliki status "success" kedalam variabel $enrolled, kemudian kita memanggil relasi menggunakan with, selanjutnya pada saat melakukan pemanggilan relasi details, kita melakukan sebuah query untuk mengambil data transaction detail dengan "menu_id" sesuai dengan variabel $menu->id.
        */
        $enrolled = Transaction::with('details.menu')
            ->where('status', 'success')
            ->whereHas('details', function($query) use($menu){
                $query->where('menu_id', $menu->id);
            })->count();

        /*
            tampung data transaction yang memiliki status "success" dan "user_id" sesuai dengan user yang sedang login kedalam variabel $alreadyBought, kemudian kita memanggil relasi menggunakan with, selanjutnya pada saat melakukan pemanggilan relasi details, kita melakukan sebuah query untuk mengambil data transaction detail dengan "menu_id" sesuai dengan variabel $menu->id.
        */
        if(Auth::user()){
            $alreadyBought = Transaction::with('details.menu')
                ->where('status', 'success')
                ->where('user_id', Auth::id())
                ->whereHas('details', function($query) use($menu){
                    $query->where('menu_id', $menu->id);
                })->first();
        }else{
            $alreadyBought = [];
        }

        // passing variabel $menu, $enrolled, dan $alreadyBought kedalam view.
        return view('landing.menu.show', compact('menu', 'menu', 'enrolled', 'alreadyBought'));
    }

//    public function video(Menu $menu, $episode)
//    {
//        // tampung data user yang sedang login kedalam variable $user.
//        $user = Auth::user();
//
//        // tampung data video dengan "menu_id" dan "episode" sesuai dengan variabel $menu dan $episode kedalam variabel $video.
//        $video = Video::whereBelongsTo($menu)->where('episode', $episode)->first();
//
//        /*
//            tampung data transaction yang memiliki status "success" dan "user_id" sesuai dengan user yang sedang login kedalam variabel $transaction, kemudian kita memanggil relasi menggunakan with, selanjutnya pada saat melakukan pemanggilan relasi details, kita melakukan sebuah query untuk mengambil data transaction detail dengan "menu_id" sesuai dengan variabel $menu->id.
//        */
//        if($user){
//            $transaction = Transaction::with('user', 'details.menu')
//                ->where('user_id', $user->id)
//                ->where('status', 'success')
//                ->whereHas('details', function($query) use($menu){
//                    $query->where('menu_id', $menu->id);
//                })->get();
//        }else{
//            $transaction = [];
//        }
//
//        // tampung data review dengan "menu_id" sesuai dengan variabel $menu->id kedalam variabel $reviews.
//        $reviews = Review::where('menu_id', $menu->id)->get();
//
//        // tampung jumlah rata - rata dari "rating" data review dengan "menu_id" sesuai dengan variabel $menu->id kedalam variabel $avgRating.
//        $avgRating = Review::where('menu_id', $menu->id)->avg('rating');
//
//        // cek apakah variabel $transaction memiliki nilai atau tidak.
//        if(count($transaction)){
//            // tampung data variabel $transaction kedalam variabel $alreadyBought.
//            $alreadyBought = $transaction;
//            // jika variabel $transaction tidak memiliki nilai
//        }else{
//            // tampung empty string kedalam variabel $alreadyBought
//            $alreadyBought = '';
//        }
//        // dd($transaction);
//
//        // cek apakah data variabel $video dengan "intro" sama dengan 0 dan atau apakah data variabel $alreadyBounght memiliki nilai atau tidak
//        if($alreadyBought || $video->intro == 0){
//            // tampung seluruh data video dengan "menu_id" sesuai dengan variabel $menu kedalam variabel $videos, dan data yang ditampilkan diurutkan berdasarkan episode.
//            $videos = Video::whereBelongsTo($menu)->orderBy('episode')->get();
//            // jila data variabel $video dengan "intro" sama dengan 1, dan atau data variabel $alreadyBought tidak memiliki nilai.
//        }else{
//            // kembali kehalaman sebelumnya dengan membawa toastr.
//            return back()->with('toast_error', 'Episode ini hanya untuk member premium');
//        }
//
//        // passing variabel $Menu, $video, $videos, $alreadyBought, $reviews, dan $avgRating kedalam view.
//        return view('landing.menu.video', compact('menu','video', 'videos', 'alreadyBought', 'reviews', 'avgRating'));
//    }
}
