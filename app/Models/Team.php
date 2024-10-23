<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'jabatan',
        'foto',
        'deskripsi',
        'user_id',
    ];

    public function userId()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
