<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function index()
    {
        $data = Guru::latest()->paginate(15);
        return view('admin.guru', compact('data'));
    }

    public function create()
    {
        return view('admin.form-guru');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nip_nuptk' => 'required|numeric|digits_between:0,18|unique:guru,nip_nuptk',
            'mata_pelajaran' => 'nullable|string|max:100',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'tanggal_lahir' => 'nullable|date',
            'tanggal_masuk' => 'nullable|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        ]);

        $data = $request->all();

        // Handle upload foto
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto_guru', 'public');
        }

        Guru::create($data);

        return redirect()->route('guru.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id_guru)
    {
        $guru = Guru::findOrFail($id_guru);
        return view('admin.edit-guru', compact('guru'));
    }

    public function update(Request $request, $id_guru)
    {
        $guru = Guru::findOrFail($id_guru);

        $request->validate([
            'nama' => 'required|string|max:255',
            'nip_nuptk' => 'required|numeric|digits_between:0,18|unique:guru,nip_nuptk,' .$id_guru . ',id_guru',
            'mata_pelajaran' => 'nullable|string|max:100',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'tanggal_lahir' => 'nullable|date',
            'tanggal_masuk' => 'nullable|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
        ]);

        $data = $request->all();

        // Handle upload foto baru
        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto_guru', 'public');
        } else {
            unset($data['foto']);
        }

        $guru->update($data);

        return redirect()->route('guru.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id_guru)
    {
        Guru::findOrFail($id_guru)->delete();
        return redirect()->route('guru.index')->with('success', 'Data berhasil dihapus');
    }
}