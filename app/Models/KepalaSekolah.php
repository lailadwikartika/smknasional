<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KepalaSekolah extends Model
{
    use HasFactory;

    protected $table = 'kepala_sekolah';
    protected $primaryKey = 'id_kepala_sekolah';

    protected $fillable = [
        'nama',
        'nip_nuptk',
        'foto',
        'tanggal_lahir',
        'jenis_kelamin',
        'sambutan', 
    ];
}