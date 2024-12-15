<?php
//disasterfactory
namespace Database\Factories;

use App\Models\Disaster;
use App\Models\DisasterType;
use Illuminate\Database\Eloquent\Factories\Factory;

class DisasterFactory extends Factory
{
    protected $model = Disaster::class;

    public function definition(): array
    {
        return [
            'disaster_type_id' => DisasterType::factory(),
            'lokasi' => fake()->address(),
            'waktu_kejadian' => fake()->dateTimeBetween('-1 year', 'now'),
            'deskripsi' => fake()->paragraph(),
            'status' => fake()->randomElement([
                'Proses Entry',
                'Menunggu Konfirmasi',
                'Ditolak',
                'Diterima'
            ]),
        ];
    }
}
