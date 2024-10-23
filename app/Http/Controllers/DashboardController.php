<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Produk;
use App\Models\Team;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth()->user();
        $kegiatan = Kegiatan::where('user_id', $user->id)->count();
        $team = Team::where('user_id', $user->id)->count();
        $produk = Produk::where('user_id', $user->id)->count();
        return view('Admin.index', compact('kegiatan', 'team', 'produk'));
    }
}
