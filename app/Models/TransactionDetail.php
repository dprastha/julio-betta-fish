<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id_transaksi',
        'id_ikan',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'id_transaksi', 'id');
    }

    public function fish()
    {
        return $this->belongsTo(Fish::class, 'id_ikan', 'id');
    }
}
