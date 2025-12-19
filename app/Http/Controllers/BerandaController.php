<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\KepalaSekolah;
use App\Models\Jurusan;
use App\Models\Fasilitas;
use App\Models\Ekstrakurikuler;
use App\Models\Bkk;
use App\Models\StrukturOrganisasi;
use App\Models\Pbdp;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        // $jurusan = Jurusan::all(); // Ambil semua data jurusan
        $fasilitases = Fasilitas::all();
        $kepala = KepalaSekolah::latest()->first();
        $ekstrakurikuler = Ekstrakurikuler::all();

        return view('user.beranda', compact('kepala', 'fasilitases', 'ekstrakurikuler'));
    }

    public function data_kepalasekolah()
    {
        $kepala = KepalaSekolah::latest()->first();
        return view('user.data-kepala-sekolah', compact('kepala'));
    }

    public function data_guru()
    {
        $guru = Guru::latest()->get(); // Pastikan variabel ini bernama $guru
        return view('user.data-guru', compact('guru')); // Pastikan compact menggunakan $guru
    }

    public function data_jurusan()
    {
        $jurusan = Jurusan::latest()->get(); // Pastikan variabel ini bernama $guru
        return view('user.data-jurusan', compact('jurusan')); // Pastikan compact menggunakan $guru
    }
    public function data_fasilitas()
    {
        $fasilitas = Fasilitas::latest()->get();
        return view('user.data-fasilitas', ['fasilitas' => $fasilitas]);
    }

    public function data_struktur_organisasi()
    {
        $strukturorganisasi = StrukturOrganisasi::latest()->first();
        return view('user.data-struktur-organisasi', compact('strukturorganisasi'));
    }

    public function data_ekstrakurikuler()
    {
        $ekstrakurikuler = Ekstrakurikuler::latest()->get();
        return view('user.data-ekstrakurikuler', compact('ekstrakurikuler'));
    }

    public function data_bkk()
    {
        $berita_bkk = Bkk::latest()->get();
        return view('user.data-bkk', compact('berita_bkk'));
    }

    public function adminberanda()
    {
        $jumlahGuru = Guru::count();
        $jumlahJurusan = Jurusan::count();
        $jumlahFasilitas = Fasilitas::count(); // Ambil jumlah fasilitas
        $jumlahEkstrakurikuler = Ekstrakurikuler::count();

        // Mengambil data jumlah guru per tahun masuk
        $statistikGuru = Guru::select(
                DB::raw('YEAR(tanggal_masuk) as tahun'),
                DB::raw('count(*) as jumlah')
            )
            ->whereNotNull('tanggal_masuk')
            ->groupBy('tahun')
            ->orderBy('tahun', 'asc') // Urutkan dari tahun terlama untuk chart
            ->get();

        // Memisahkan data untuk chart
        $tahunMasuk = $statistikGuru->pluck('tahun');
        $jumlahGuruPerTahun = $statistikGuru->pluck('jumlah');

        return view('admin.admin-beranda', compact('jumlahGuru', 'jumlahJurusan', 'jumlahFasilitas', 'jumlahEkstrakurikuler', 'tahunMasuk', 'jumlahGuruPerTahun'));
    }
    // di file app/Http/Controllers/BerandaController.php
public function data_pbdb()
{
    // Ubah dari first() menjadi get()
    $pbdp = Pbdp::latest()->get(); 

    return view('user.data-pbdb', compact('pbdp'));
}

}
