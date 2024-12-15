<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    public function run(): void
    {
        $patients = [
            [
                'no_rm' => '000001',
                'nama' => 'Ahmad Subarjo',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '1990-05-15',
                'jenis_kelamin' => 'Laki-Laki',
                'agama' => 'Islam',
                'alamat' => 'Jl. Mangga No. 123, Jakarta Selatan',
                'jaminan_kesehatan' => 'BPJS',
                'penyebab_kondisi' => 'Tertimpa reruntuhan akibat gempa',
                'triase' => 'Kuning',
                'kondisi_pasien' => 'Patah tulang kaki kanan, luka ringan di kepala',
                'hasil_diagnosa' => 'Fraktur tibia dan fibula',
                'kode_icd_10' => 'S82.101',
                'kode_icd_9cm' => '79.36'
            ],
            [
                'no_rm' => '000002',
                'nama' => 'Siti Aminah',
                'tempat_lahir' => 'Bandung',
                'tanggal_lahir' => '1985-08-20',
                'jenis_kelamin' => 'Perempuan',
                'agama' => 'Islam',
                'alamat' => 'Jl. Melati No. 45, Bandung',
                'jaminan_kesehatan' => 'Umum',
                'penyebab_kondisi' => 'Terseret banjir',
                'triase' => 'Merah',
                'kondisi_pasien' => 'Hipotermia berat, luka dalam di perut',
                'hasil_diagnosa' => 'Trauma abdomen, hipotermia',
                'kode_icd_10' => 'T68',
                'kode_icd_9cm' => '96.31'
            ],
        ];

        foreach ($patients as $patient) {
            Patient::create($patient);
        }
    }
}