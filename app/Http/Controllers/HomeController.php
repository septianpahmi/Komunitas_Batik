<?php

namespace App\Http\Controllers;

use App\Models\Galer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $galeri = Galer::all();
        return view('Home.index', compact('galeri'));
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}
