<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternatif extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'luas_bangunan',
        'jumlah_penerangan',
        'pendapatan',
        'jumlah_anggota_keluarga'
    ];

    public $timestamps = false;
}
