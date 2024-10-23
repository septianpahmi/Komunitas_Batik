<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index($id)
    {
        $data = User::find($id);
        return view('Admin.components.profile', compact('data'));
    }

    public function profilUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:50',
            'email_perusahaan' => 'nullable',
            'phone' => 'nullable|max:13',
            'address' => 'nullable|max:50',
            'district' => 'nullable|max:50',
            'regency' => 'nullable|max:50',
            'province' => 'nullable|max:50',
            'zip_code' => 'nullable|min:5',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        try {
            $data = User::findOrFail($id);
            $data->name = $request->input('name');
            $data->email_perusahaan = $request->input('email_perusahaan');
            $data->phone = $request->input('phone');
            $data->address = $request->input('address');
            $data->district = $request->input('district');
            $data->regency = $request->input('regency');
            $data->province = $request->input('province');
            $data->zip_code = $request->input('zip_code');
            if ($request->hasFile('foto')) {
                // Hapus foto lama jika ada
                if ($data->foto && file_exists(public_path('Profile/' . $data->foto))) {
                    unlink(public_path('Profile/' . $data->foto));
                }

                // Upload foto baru
                $file = $request->file('foto');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('Profile'), $filename);
                $data->foto = $filename;  // Simpan nama file foto baru
            }
            $data->save();
            return redirect()->back()->with('success', 'Profile perusahaan berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal merubah profile, Coba lagi.');
        }
    }

    public function akunUpdate(Request $request, $id)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8',
        ]);
        try {
            $data = User::findOrFail($id);
            $data->email = $request->input('email');
            $data->password = bcrypt($request->input('password'));
            $data->save();
            return redirect()->back()->with('success', 'Akun berhasil diubah.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal merubah akun, Coba lagi.');
        }
    }
}
