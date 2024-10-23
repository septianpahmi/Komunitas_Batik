<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galer extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kegiatan',
        'foto',
    ];
}
