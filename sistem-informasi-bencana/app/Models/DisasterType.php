<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DisasterType extends Model
{
    protected $fillable = [
        'nama',
        'kode',
        'deskripsi'
    ];

    public function disasters()
    {
        return $this->hasMany(Disaster::class);
    }
}
