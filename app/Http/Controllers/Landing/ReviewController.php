<?php

namespace App\Http\Controllers\Landing;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ReviewController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request) : View
    {
        /*
            tampung seluruh data review kedalam variabel $reviews, disini
            kita juga menambahkan method search dan multiSearch
            yang kita dapatkan dari sebuah trait hasScope, selanjutnya
            kita pecah data review yang kita tampilkan hanya 8 per halaman
            dengan urutan terbaru.
        */
        $reviews = Review::search('rating')
            ->multiSearch('menu', 'name')
            ->multiSearch('user', 'name')->latest()->get();

        // passing variabel $reviews kedama view.
        return view('landing.review.index', compact('reviews'));
    }
}
