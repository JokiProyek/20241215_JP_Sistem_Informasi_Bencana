<?php
//disastertypefactory
namespace Database\Factories;

use App\Models\DisasterType;
use Illuminate\Database\Eloquent\Factories\Factory;

class DisasterTypeFactory extends Factory
{
    protected $model = DisasterType::class;

    public function definition(): array
    {
        return [
            'nama' => fake()->unique()->randomElement([
                'Gempa Bumi',
                'Banjir',
                'Tanah Longsor',
                'Tsunami',
                'Gunung Meletus',
                'Kebakaran Hutan',
                'Angin Topan',
                'Kekeringan'
            ]),
            'kode' => 'BNC-' . fake()->unique()->randomNumber(3),
            'deskripsi' => fake()->paragraph(),
        ];
    }
}
