<?php

namespace App\Http\Controllers;

use App\Models\KepalaSekolah;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class KepalaSekolahController extends Controller
{
    public function index()
    {
        $data = KepalaSekolah::latest()->paginate(15);
        return view('admin.kepala-sekolah', compact('data'));
    }

    public function create()
    {
        return view('admin.form-kepala-sekolah');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip_nuptk' => 'required|numeric|digits_between:0,18|unique:kepala_sekolah,nip_nuptk',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'sambutan' => 'nullable|string',
        ]);

        $data = $request->all();

        // Handle upload foto
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto_kepala_sekolah', 'public');
        }

        KepalaSekolah::create($data);

        return redirect()->route('kepala-sekolah.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id_kepala_sekolah)
    {
        $kepala = KepalaSekolah::findOrFail($id_kepala_sekolah);
        return view('admin.edit-kepala-sekolah', compact('kepala'));
    }

    public function update(Request $request, $id_kepala_sekolah)
    {
        $kepala = KepalaSekolah::findOrFail($id_kepala_sekolah);

        $request->validate([
            'nama' => 'required',
            'nip_nuptk' => 'required|numeric|digits_between:0,18|unique:kepala_sekolah,nip_nuptk,' . $id_kepala_sekolah . ',id_kepala_sekolah',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'sambutan' => 'nullable|string',
        ]);

        $data = $request->all();

        // Handle upload foto baru
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($kepala->foto) {
                Storage::disk('public')->delete($kepala->foto);
            }
            $data['foto'] = $request->file('foto')->store('foto_kepala_sekolah', 'public');
        } else {
            unset($data['foto']);
        }

        $kepala->update($data);

        return redirect()->route('kepala-sekolah.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id_kepala_sekolah)
    {
        $kepala = KepalaSekolah::findOrFail($id_kepala_sekolah);

        // Hapus foto dari storage jika ada
        if ($kepala->foto) {
            Storage::disk('public')->delete($kepala->foto);
        }
        $kepala->delete();
        return redirect()->route('kepala-sekolah.index')->with('success', 'Data berhasil dihapus');
    }
//     


}
