<?php

namespace App\Http\Controllers;

use App\Models\Pbdp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PbdpController extends Controller
{
    public function index()
    {
        // gunakan nama variabel $pbdp agar sesuai dengan yang dipakai di Blade
        $pbdp = Pbdp::latest()->paginate(15);
        return view('admin.pbdp', compact('pbdp'));
    }

    public function create()
    {
        return view('admin.form-pbdp');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_jalur' => 'required',
            'deskripsi' => 'required',
            'tanggal_buka' => 'required|date',
            'tanggal_tutup' => 'required|date|after:tanggal_buka',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto_pbdp', 'public');
        }

        Pbdp::create($data);

        return redirect()->route('pbdp.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id_pbdp)
    {
        $pbdp = Pbdp::findOrFail($id_pbdp);
        return view('admin.edit-pbdp', compact('pbdp'));
    }

    public function update(Request $request, $id_pbdp)
    {
        $pbdp = Pbdp::findOrFail($id_pbdp);

        $request->validate([
            'nama_jalur' => 'required',
            'deskripsi' => 'required',
            'tanggal_buka' => 'required|date',
            'tanggal_tutup' => 'required|date|after:tanggal_buka',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            if ($pbdp->foto) {
                Storage::disk('public')->delete($pbdp->foto);
            }
            $data['foto'] = $request->file('foto')->store('foto_pbdp', 'public');
        } else {
            unset($data['foto']);
        }

        $pbdp->update($data);

        return redirect()->route('pbdp.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id_pbdp)
    {
        $pbdp = Pbdp::findOrFail($id_pbdp);

        if ($pbdp->foto) {
            Storage::disk('public')->delete($pbdp->foto);
        }
        $pbdp->delete();
        return redirect()->route('pbdp.index')->with('success', 'Data berhasil dihapus');
    }
}