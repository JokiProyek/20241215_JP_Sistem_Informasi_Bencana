<?php
// patientfactory
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    public function definition(): array
    {
        return [
            'no_rm' => fake()->unique()->numberBetween(100000, 999999),
            'nama' => fake()->name(),
            'tempat_lahir' => fake()->city(),
            'tanggal_lahir' => fake()->date(),
            'jenis_kelamin' => fake()->randomElement(['Laki-Laki', 'Perempuan']),
            'agama' => fake()->randomElement(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha']),
            'alamat' => fake()->address(),
            'jaminan_kesehatan' => fake()->randomElement(['BPJS', 'Asuransi', 'Umum']),
            'penyebab_kondisi' => fake()->sentence(),
            'triase' => fake()->randomElement(['Merah', 'Kuning', 'Hijau', 'Hitam']),
            'kondisi_pasien' => fake()->paragraph(),
            'hasil_diagnosa' => fake()->sentence(),
            'kode_icd_10' => 'ICD10-' . fake()->randomNumber(4),
            'kode_icd_9cm' => 'ICD9-' . fake()->randomNumber(4),
        ];
    }
}