<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Disaster;

class DisasterSeeder extends Seeder
{
    public function run()
    {
        $disasters = [
            [
                'tipe' => 'alam',
                'no_bencana' => 'KB00003',
                'nama_bencana' => 'TSUNAMI',
                'tanggal_kejadian' => '2024-10-08',
                'alamat' => 'KAROLINA',
                'diinput_oleh' => 'USER',
                'status' => 'DATA DITERIMA'
            ],
            [
                'tipe' => 'alam',
                'no_bencana' => 'KB00004',
                'nama_bencana' => 'GEMPA',
                'tanggal_kejadian' => '2024-05-06',
                'alamat' => 'KONI BARAT',
                'diinput_oleh' => 'PETUGAS UGD',
                'status' => 'DATA DITERIMA'
            ],
            [
                'tipe' => 'non-alam',
                'no_bencana' => 'KNB00009',
                'nama_bencana' => 'COVID-19',
                'tanggal_kejadian' => '2022-04-04',
                'alamat' => 'WUHAN',
                'diinput_oleh' => 'USER',
                'status' => 'DATA DITERIMA'
            ],
            [
                'tipe' => 'non-alam',
                'no_bencana' => 'KNB00001',
                'nama_bencana' => 'CACAR MONYET',
                'tanggal_kejadian' => '2024-11-04',
                'alamat' => 'MUHOLAN BARAT',
                'diinput_oleh' => 'PETUGAS UGD',
                'status' => 'DATA DITERIMA'
            ]
        ];

        foreach ($disasters as $disaster) {
            Disaster::create($disaster);
        }
    }
}