<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $data = Team::where('user_id', $user->id)->get();
        return view('Admin.components.team', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:50',
            'jabatan' => 'required|max:50',
            'deskripsi' => 'required|max:500',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);
        $user = auth()->user();
        try {
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('Team'), $filename);

            $data = new Team();
            $data->nama = $request->input('nama');
            $data->jabatan = $request->input('jabatan');
            $data->deskripsi = $request->input('deskripsi');
            $data->foto = $filename;
            $data->user_id = $user->id;
            $data->save();

            return redirect()->back()->with('success', 'Team dan foto berhasil disimpan.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menyimpan, Coba lagi.');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|max:50',
            'jabatan' => 'required|max:50',
            'deskripsi' => 'required|max:500',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);
        try {
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('Team'), $filename);

            $data = Team::find($id);
            $data->nama = $request->input('nama');
            $data->jabatan = $request->input('jabatan');
            $data->deskripsi = $request->input('deskripsi');
            $data->foto = $filename;
            $data->user_id = auth()->user()->id;
            $data->save();
            return redirect()->back()->with('success', 'Data berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menyimpan, Coba lagi.');
        }
    }

    public function delete($id)
    {
        $data = Team::find($id);

        if ($data) {
            $filePath = public_path('Team/' . $data->foto);
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
