<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $table = 'jurusan'; // kalau tabel kamu bernama jurusan (bukan jurusans)
    protected $primaryKey = 'id_jurusan';

    protected $fillable = [
        'kode_jurusan',
        'nama_jurusan',
        'keterangan',
    ];
}
