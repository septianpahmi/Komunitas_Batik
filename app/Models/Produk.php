<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_prod',
        'harga',
        'kategori',
        'gambar',
        'deskripsi',
        'user_id',
    ];

    public function userId()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
