<?php

namespace App\Http\Controllers;

use App\Models\Galer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class GaleriController extends Controller
{
    public function index()
    {
        $data = Galer::all();
        return view('Admin.components.galeri', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'nama_kegiatan' => 'required|max:50',
        ]);

        try {
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('galeri'), $filename);

            $galeri = new Galer();
            $galeri->nama_kegiatan = $request->input('nama_kegiatan');
            $galeri->foto = $filename;
            $galeri->save();

            return redirect()->back()->with('success', 'Kegiatan dan foto berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menyimpan kegiatan dan foto');
        }
    }

    public function delete($id)
    {
        $data = Galer::find($id);
        if ($data) {
            $filePath = public_path('galeri/' . $data->foto);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            $data->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Data tidak ditemukan.');
        }
    }
}
