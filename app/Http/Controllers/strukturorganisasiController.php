<?php

namespace App\Http\Controllers;

use App\Models\strukturorganisasi;
use Illuminate\Http\Request;

class strukturorganisasiController extends Controller
{
    public function index()
    {
        $data = strukturorganisasi::latest()->paginate(15);
        return view('admin.struktur-organisasi', compact('data'));
    }

    public function create()
    {
        return view('admin.form-struktur-organisasi');
    }


    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        // Handle upload foto
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto_struktur-organisasi', 'public');
        }

        strukturorganisasi::create($data);

        return redirect()->route('struktur-organisasi.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id_struktur_organisasi)
    {
        $strukturorganisasi = strukturorganisasi::findOrFail($id_struktur_organisasi);
        return view('admin.edit-struktur-organisasi', compact('strukturorganisasi'));
    }

    public function update(Request $request, $id_struktur_organisasi)
    {
        $strukturorganisasi = strukturorganisasi::findOrFail($id_struktur_organisasi);

        $request->validate([
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        // Handle upload foto baru
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto_struktur-organisasi', 'public');
        } else {
            unset($data['foto']);
        }

        $strukturorganisasi->update($data);

        return redirect()->route('struktur-organisasi.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id_struktur_organisasi)
    {
        strukturorganisasi::findOrFail($id_struktur_organisasi)->delete();
        return redirect()->route('struktur-organisasi.index')->with('success', 'Data berhasil dihapus');
    }
}
