<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class KatalogController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $kategori = $request->input('kategori');

        // Ambil produk berdasarkan pencarian dan kategori jika ada
        $products = Produk::query();

        if ($search) {
            $products->where('nama_prod', 'like', '%' . $search . '%');
        }

        if ($kategori) {
            $products->where('kategori', $kategori);
        }

        $products = $products->get();

        return view('Home.components.katalog', ['products' => $products]);
    }
}
