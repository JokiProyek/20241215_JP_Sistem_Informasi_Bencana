<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disaster extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipe',
        'no_bencana',
        'nama_bencana',
        'tanggal_kejadian',
        'alamat',
        'diinput_oleh',
        'status'
    ];

    protected $dates = ['tanggal_kejadian'];
}