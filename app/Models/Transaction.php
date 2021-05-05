<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'uuid',
        'id_user',
        'nama',
        'alamat',
        'harga_total',
        'jumlah_pesanan',
        'harga_total',
        'status_transaksi'
    ];

    protected $hidden = [];

    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'id_transaksi');
    }
}
