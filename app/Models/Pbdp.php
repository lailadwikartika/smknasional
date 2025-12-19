<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pbdp extends Model
{
    use HasFactory;

    protected $table = 'pbdp';
    protected $primaryKey = 'id_pbdp';

    protected $fillable = [
        'id_user',
        'nama_jalur',
        'deskripsi', 
        'tanggal_buka',
        'tanggal_tutup',
        'foto',
    ];
}

