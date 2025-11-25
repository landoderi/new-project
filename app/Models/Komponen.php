<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komponen extends Model
{
    protected $fillable = ['nama_komponen', 'harga', 'stok', 'id_kategori'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}

