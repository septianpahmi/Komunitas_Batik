<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\Team;

class AboutController extends Controller
{
    public function dahlia()
    {
        $User = User::where('role', 'dahlia')->first();
        $Kegiatan = Kegiatan::where('user_id', $User->id)->get();
        $Produk = Produk::where('user_id', $User->id)->get();
        $Team = Team::where('user_id', $User->id)->get();
        return view('Home.components.about.dahlia', compact('User', 'Kegiatan', 'Produk', 'Team'));
    }
    public function rajava()
    {
        $User = User::where('role', 'rajava')->first();
        $Kegiatan = Kegiatan::where('user_id', $User->id)->get();
        $Produk = Produk::where('user_id', $User->id)->get();
        $Team = Team::where('user_id', $User->id)->get();
        return view('Home.components.about.rajava', compact('User', 'Kegiatan', 'Produk', 'Team'));
    }
    public function viena()
    {
        $User = User::where('role', 'viena')->first();
        $Kegiatan = Kegiatan::where('user_id', $User->id)->get();
        $Produk = Produk::where('user_id', $User->id)->get();
        $Team = Team::where('user_id', $User->id)->get();
        return view('Home.components.about.viena', compact('User', 'Kegiatan', 'Produk', 'Team'));
    }
}
