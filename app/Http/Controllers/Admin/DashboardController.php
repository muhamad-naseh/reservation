<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Models\User;
use App\Models\Review;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        // tampung jumlah data category kedalam variabel $category.
        $category = Category::count();

        // tampung jumlah data menu kedalam variabel $menu.
        $menu = Menu::count();

        // tampung jumlah data transaction yang memiliki status "success" kedalam variabel $transaction.
        $transaction = Transaction::where('status', 'success')->count();

        // tampung jumlah data transaction yang memiliki status "success" kemudian jumlahkan "grand_total" dan masukan kedalam variabel $revenue.
        $revenue = Transaction::where('status', 'success')->sum('grand_total');

        // tampung jumlah data user yang memiliki role "cashier" kedalam variabel $cashier.
        $cashier = User::role('cashier')->count();

        // tampung jumlah data review kedalam variabel $review.
        $review = Review::count();

        // tampung jumlah data user kedalam variabel $member.
        $member = User::count();

        /*
            tampung data best menu kedalam variabel $bestMenu, disini kita melakukan sebuah query builder untuk memanipulasi data yang akan kita ambil yaitu hanya berupa sebuah nama menu
         dan total dari transaction menu tersebut yang kita ubah namanya menjadi total, disini kita tetapkan limit data yang di ambil hanya berjumlah 5.
         */
        $bestMenu = Menu::query()->withCount('transactions')->orderBy('transactions_count', 'desc')->limit(5)->get();



        // tampung data array kosong kedalam variabel $label.
        $label = [];

        // tampung data array kosong kedalam variabel $total.
        $total = [];

        // cek apakah variabel $bestMenu memiliki nilai atau tidak
        if(count($bestMenu)){
            // lakukan perulangan data $bestMenu yang kita ubah menjadi variabel $data
            foreach($bestMenu as $data){
                // tampung variabel $data->name ke dalam variabel $label[]
                $label[] = $data->name;
                // tampung variabel $data->total kedalam variabel $total[]
                $total[] = (int) $data->transactions_count;
            }
            // jika variabel $bestMenu tidak memiliki nilai
        }else{
            // masukan empty string kedalam variabel $label[]
            $label[] = '';
            // masukan empty string kedalam variabel $total[]
            $total[] = '';
        }

        return view('admin.dashboard', compact('category', 'menu', 'transaction', 'revenue', 'cashier', 'review', 'member', 'label', 'total'));
    }
}
