<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $data = Produk::where('user_id', $user->id)->get();
        return view('Admin.components.produk', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_prod' => 'required|max:50',
            'harga' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required|max:500',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);
        $user = auth()->user();
        try {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('Produk'), $filename);

            $data = new Produk();
            $data->nama_prod = $request->input('nama_prod');
            $data->harga = $request->input('harga');
            $data->kategori = $request->input('kategori');
            $data->deskripsi = $request->input('deskripsi');
            $data->gambar = $filename;
            $data->user_id = $user->id;
            $data->save();

            return redirect()->back()->with('success', 'Produk berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menyimpan produk, Coba lagi.');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_prod' => 'required|max:50',
            'harga' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required|max:500',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);
        try {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('Produk'), $filename);

            $data = Produk::find($id);
            $data->nama_prod = $request->input('nama_prod');
            $data->harga = $request->input('harga');
            $data->kategori = $request->input('kategori');
            $data->deskripsi = $request->input('deskripsi');
            $data->gambar = $filename;
            $data->user_id = auth()->user()->id;
            $data->save();
            return redirect()->back()->with('success', 'Produk berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal merubah produk, Coba lagi.');
        }
    }

    public function delete($id)
    {
        $data = Produk::find($id);

        if ($data) {
            $filePath = public_path('Produk/' . $data->gambar);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            $data->delete();

            return redirect()->back()->with('success', 'Produk berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Produk tidak ditemukan.');
        }
    }
}
