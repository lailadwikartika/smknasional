<?php

namespace App\Http\Controllers;

use App\Models\Bkk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BkkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Menggunakan paginate agar tampilan lebih rapi jika data banyak
        $data = Bkk::latest()->paginate(10);
        // Mengarahkan ke view admin yang benar
        return view('admin.bkk', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Anda perlu membuat view 'admin.bkk_create'
        return view('admin.form-bkk');
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
{
    $request->validate([
        'judul_lowongan' => 'required|string|max:255',
        'nama_perusahaan' => 'required|string|max:255',
        'persyaratan' => 'required|string',
        'tanggal_dibuka' => 'required|date',
        'tanggal_ditutup' => 'required|date|after_or_equal:tanggal_dibuka',
        'foto' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);
    
    $data = $request->all();

    // Handle upload foto - SIMPAN LANGSUNG KE public/storage
    if ($request->hasFile('foto')) {
        $filename = time() . '_' . $request->file('foto')->getClientOriginalName();
        $request->file('foto')->move(public_path('storage/foto_bkk'), $filename);
        $data['foto'] = 'foto_bkk/' . $filename;
    }

    Bkk::create($data);
    return redirect()->route('bkk.index')->with('success', 'Data BKK berhasil ditambahkan.');
}
    /**
     * Display the specified resource for public view.
     */
    public function show(Bkk $bkk)
    {
        // Anda perlu membuat view 'user.detail-bkk'
        return view('user.detail-bkk', compact('bkk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bkk $bkk)
    {
        // Anda perlu membuat view 'admin.bkk_edit'
        return view('admin.edit-bkk', compact('bkk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_bkk)
{
    $bkk = Bkk::findOrFail($id_bkk);

    $request->validate([
        'judul_lowongan' => 'required|string|max:255',
        'nama_perusahaan' => 'required|string|max:255',
        'persyaratan' => 'required|string',
        'tanggal_dibuka' => 'required|date',
        'tanggal_ditutup' => 'required|date|after_or_equal:tanggal_dibuka',
        'foto' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $data = $request->all();

    // Handle upload foto baru
    if ($request->hasFile('foto')) {
        // Hapus foto lama jika ada
        if ($bkk->foto && file_exists(public_path('storage/' . $bkk->foto))) {
            unlink(public_path('storage/' . $bkk->foto));
        }
        $filename = time() . '_' . $request->file('foto')->getClientOriginalName();
        $request->file('foto')->move(public_path('storage/foto_bkk'), $filename);
        $data['foto'] = 'foto_bkk/' . $filename;
    } else {
        unset($data['foto']);
    }

    $bkk->update($data);
    return redirect()->route('bkk.index')->with('success', 'Data BKK berhasil diperbarui.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_bkk)
    {
        $bkk = Bkk::findOrFail($id_bkk);

        // Hapus foto dari storage jika ada
        if ($bkk->foto) {
            Storage::disk('public')->delete($bkk->foto);
        }

        $bkk->delete();
        return redirect()->route('bkk.index')->with('success', 'Data berhasil dihapus');
    }
}
