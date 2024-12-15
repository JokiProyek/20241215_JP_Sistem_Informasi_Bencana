<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_rm',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'alamat',
        'jaminan_kesehatan',
        'penyebab_kondisi',
        'triase',
        'kondisi_pasien',
        'hasil_diagnosa',
        'kode_icd_10',
        'kode_icd_9cm'
    ];
}