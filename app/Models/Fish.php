<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama_ikan', 'slug', 'deskripsi', 'harga', 'kuantitas', 'foto'
    ];

    protected $hidden = [];
}
