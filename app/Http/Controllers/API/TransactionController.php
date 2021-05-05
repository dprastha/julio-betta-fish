<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function get(Request $request, $id)
    {
        $fish = Transaction::with(['details.fish'])->find($id);

        if ($fish)
            return ResponseFormatter::success($fish, 'Data transaksi berhasil diambil');
        else
            return ResponseFormatter::error(null, 'Data transaksi tidak ada', 404);
    }
}
