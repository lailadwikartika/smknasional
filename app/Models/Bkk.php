<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bkk extends Model
{
    use HasFactory;

    // Nama tabel (opsional kalau nama tabelnya sesuai)
    protected $table = 'bkk';
    protected $primaryKey = 'id_bkk';

    // Kolom yang boleh diisi
    protected $fillable = [
        'judul_lowongan',
        'nama_perusahaan',
        'persyaratan',
        'tanggal_dibuka',
        'tanggal_ditutup',
        'foto',
    ];
};