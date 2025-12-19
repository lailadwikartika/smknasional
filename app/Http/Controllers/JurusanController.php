<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    // Tampilkan semua data
    public function index()
    {
        $data = Jurusan::latest()->paginate(15);
        return view('admin.jurusan', compact('data'));
    }

    // Form tambah
    public function create()
    {
        return view('admin.form-jurusan');
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'kode_jurusan' => 'required|string|max:10|unique:jurusan,kode_jurusan',
            'nama_jurusan' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
        ]);

        Jurusan::create($request->all());

        return redirect()->route('jurusan.index')->with('success', 'Data berhasil ditambahkan');
    }

    // Tampilkan form edit
    public function edit($id_jurusan)
    {
        $jurusan = Jurusan::findOrFail($id_jurusan);
        return view('admin.edit-jurusan', compact('jurusan'));
    }

    // Update data
    public function update(Request $request, $id_jurusan)
    {
        $jurusan = Jurusan::findOrFail($id_jurusan);

        $request->validate([
            'kode_jurusan' => 'required|string|max:10|unique:jurusan,kode_jurusan,' . $id_jurusan . ',id_jurusan',
            'nama_jurusan' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
        ]);

        $jurusan->update($request->all());

        return redirect()->route('jurusan.index')->with('success', 'Data berhasil diupdate');
    }

    // Hapus data
    public function destroy($id_jurusan)
    {
        $jurusan = Jurusan::findOrFail($id_jurusan);
        $jurusan->delete();

        return redirect()->route('jurusan.index')->with('success', 'Jurusan berhasil dihapus');
    }
}
