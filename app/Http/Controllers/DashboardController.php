<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $income = Transaction::where('status_transaksi', 'SUKSES')->sum('harga_total');
        $sales = Transaction::count();
        $fish = Transaction::orderBy('id', 'DESC')->take(5)->get();
        $pie = [
            'diproses' => Transaction::where('status_transaksi', 'DIPROSES')->count(),
            'dikirim' => Transaction::where('status_transaksi', 'DIKIRIM')->count(),
            'sukses' => Transaction::where('status_transaksi', 'SUKSES')->count(),
        ];

        return view('pages.dashboard')->with([
            'income' => $income,
            'sales' => $sales,
            'fish' => $fish,
            'pie' => $pie,
        ]);
    }
}
