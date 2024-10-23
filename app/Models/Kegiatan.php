<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kegiatan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kegiatan',
        'foto',
        'deskripsi',
        'user_id',
    ];

    public function userId()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
