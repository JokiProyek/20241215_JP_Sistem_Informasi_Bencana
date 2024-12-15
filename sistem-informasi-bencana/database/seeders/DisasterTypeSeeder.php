<?php

namespace Database\Seeders;

use App\Models\DisasterType;
use Illuminate\Database\Seeder;

class DisasterTypeSeeder extends Seeder
{
    public function run(): void
    {
        $types = [
            [
                'nama' => 'Gempa Bumi',
                'kode' => 'BNC-001',
                'deskripsi' => 'Getaran atau guncangan yang terjadi di permukaan bumi akibat pelepasan energi dari dalam secara tiba-tiba.'
            ],
            [
                'nama' => 'Tsunami',
                'kode' => 'BNC-002',
                'deskripsi' => 'Gelombang laut yang terjadi karena adanya gempa bumi atau letusan gunung berapi di bawah laut.'
            ],
            [
                'nama' => 'Banjir',
                'kode' => 'BNC-003',
                'deskripsi' => 'Peristiwa yang terjadi ketika aliran air yang berlebihan merendam daratan.'
            ],
            [
                'nama' => 'Tanah Longsor',
                'kode' => 'BNC-004',
                'deskripsi' => 'Perpindahan material pembentuk lereng berupa batuan, bahan rombakan, tanah yang bergerak ke bawah.'
            ],
            [
                'nama' => 'Gunung Meletus',
                'kode' => 'BNC-005',
                'deskripsi' => 'Bagian dari aktivitas vulkanik yang dikeluarkan melalui lubang kepundan atau rekahan.'
            ],
            [
                'nama' => 'Banjir Bandang',
                'kode' => 'BNC-006',
                'deskripsi' => 'Banjir yang datang secara tiba-tiba dengan debit air yang besar yang disebabkan terbendungnya aliran sungai.'
            ],
            [
                'nama' => 'Kekeringan',
                'kode' => 'BNC-007',
                'deskripsi' => 'Ketersediaan air yang jauh di bawah kebutuhan air untuk kebutuhan hidup, pertanian, kegiatan ekonomi dan lingkungan.'
            ],
            [
                'nama' => 'Kebakaran Hutan',
                'kode' => 'BNC-008',
                'deskripsi' => 'Suatu keadaan dimana hutan dilanda api sehingga mengakibatkan kerusakan hutan atau hasil hutan.'
            ],
            [
                'nama' => 'Angin Puting Beliung',
                'kode' => 'BNC-009',
                'deskripsi' => 'Angin kencang yang berputar-putar dengan kecepatan lebih dari 60-90 km/jam yang berlangsung 5-10 menit.'
            ],
            [
                'nama' => 'Abrasi',
                'kode' => 'BNC-010',
                'deskripsi' => 'Proses pengikisan pantai oleh tenaga gelombang laut dan arus laut yang bersifat merusak.'
            ]
        ];

        foreach ($types as $type) {
            DisasterType::create($type);
        }
    }
}

