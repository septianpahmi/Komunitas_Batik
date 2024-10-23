<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $data = Kegiatan::where('user_id', $user->id)->get();
        return view('Admin.components.kegiatan', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'nama_kegiatan' => 'required|max:50',
            'deskripsi' => 'required|max:500',
        ]);
        try {
            $user = auth()->user();
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('kegiatan'), $filename);

            $kegiatan = new Kegiatan();
            $kegiatan->nama_kegiatan = $request->input('nama_kegiatan');
            $kegiatan->deskripsi = $request->input('deskripsi');
            $kegiatan->foto = $filename;
            $kegiatan->user_id = $user->id;
            $kegiatan->save();

            return redirect()->back()->with('success', 'Kegiatan dan foto berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menyimpan kegiatan dan foto');
        }
    }

    public function delete($id)
    {
        $data = Kegiatan::find($id);

        if ($data) {
            $filePath = public_path('kegiatan/' . $data->foto);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            $data->delete();

            return redirect()->back()->with('success', 'Kegiatan dan foto berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }
    }
}
