<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Fish;

class TransactionController extends Controller
{

    public $nama_ikan;
    public $foto;
    public $status_transaksi;
    public $id_user;

    public function get($id)
    {
        $fish = Transaction::with('details.fish')->where('id_user', "$id")->get();
        $transaction = Transaction::where('id_user', "$id")->get();
        $count = Transaction::where('id_user', "$id")->get()->count();
        for ($i = 0; $i < $count; $i++) {
            $result[$i] = new TransactionController();
            $result[$i]->nama_ikan = $fish[$i]['details'][0]['fish']['nama_ikan'];
            $result[$i]->id_user = $transaction[0]['id_user'];
            $result[$i]->status_transaksi = $transaction[$i]['status_transaksi'];
            $result[$i]->foto = $fish[$i]['details'][0]['fish']['foto'];
        }

        return response()->json($result);
    }
}
