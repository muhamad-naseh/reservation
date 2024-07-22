<?php

namespace App\Http\Controllers\Member;

use App\Models\Review;
use App\Models\Showcase;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request) : View
    {
        // tampung data user yang sedang login kedalam variabel $user.
        $user = $request->user();

        /*
            tampung data transaction detail kedalam variabel $course, kemudian kita memanggil relasi menggunakan with,
            selanjutnya kita melakukan sebuah query untuk mengambil data transaction yang memiliki status success dan seusai dengan user yang sedang login, selanjutnya kita jumlahkan data tersebut.
        */
        $menus = TransactionDetail::with('transaction', 'menu.reviews')
            ->whereHas('transaction', function($query) use($user){
                $query->where('user_id', $user->id)->where('status', 'success');
            })->count();

        // tampung jumlah data review user yang sedang login kedalam variabel $review.
        $review = Review::where('user_id', $user->id)->count();

        // tampung jumlah data transaction user yang sedang login dan memiliki status "success" kedalam variabel $transaction.
        $transaction = Transaction::where('user_id', $user->id)
            ->where('status', 'success')->count();

        // tampung jumlah data showcase user yang sedang login kedalam variabel $showcase.
//        $showcase = Showcase::where('user_id', $user->id)->count();

        // passing variabel $course, $review, $transaction, dan $showcase kedalam view.
        return view('member.dashboard', compact('menus', 'review', 'transaction'));
    }
}
