<?php

namespace App\Http\Controllers;

use App\Models\Ekstrakurikuler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EkstrakurikulerController extends Controller
{
    public function index()
    {
        $data = Ekstrakurikuler::latest()->paginate(15);
        return view('admin.ekstrakurikuler', compact('data'));
    }

    public function create()
    {
        return view('admin.form-ekstrakurikuler');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ekstrakurikuler' => 'required|string|max:255|unique:ekstrakurikuler,nama_ekstrakurikuler',
            'keterangan' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('foto_ekstrakurikuler', 'public');
        }

        Ekstrakurikuler::create($data);

        return redirect()->route('ekstrakurikuler.index')->with('success', 'Data ekstrakurikuler berhasil ditambahkan.');
    }

    public function edit($id_ekstrakurikuler)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id_ekstrakurikuler);
        return view('admin.edit-ekstrakurikuler', compact('ekstrakurikuler'));
    }

    public function update(Request $request, $id_ekstrakurikuler)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id_ekstrakurikuler);

        $request->validate([
            'nama_ekstrakurikuler' => 'required|string|max:255|unique:ekstrakurikuler,nama_ekstrakurikuler,' . $id_ekstrakurikuler . ',id_ekstrakurikuler',
            'keterangan' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            if ($ekstrakurikuler->foto && Storage::disk('public')->exists($ekstrakurikuler->foto)) {
                Storage::disk('public')->delete($ekstrakurikuler->foto);
            }
            $data['foto'] = $request->file('foto')->store('foto_ekstrakurikuler', 'public');
        }

        $ekstrakurikuler->update($data);

        return redirect()->route('ekstrakurikuler.index')->with('success', 'Data ekstrakurikuler berhasil diupdate.');
    }

    public function destroy($id_ekstrakurikuler)
    {
        $ekstrakurikuler = Ekstrakurikuler::findOrFail($id_ekstrakurikuler);

        if ($ekstrakurikuler->foto && Storage::disk('public')->exists($ekstrakurikuler->foto)) {
            Storage::disk('public')->delete($ekstrakurikuler->foto);
        }

        $ekstrakurikuler->delete();

        return redirect()->route('ekstrakurikuler.index')->with('success', 'Data ekstrakurikuler berhasil dihapus.');
    }
}