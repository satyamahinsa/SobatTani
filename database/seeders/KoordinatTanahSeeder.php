<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KoordinatTanah;


class KoordinatTanahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $areas = [
            ['name' => 'Madiun Fertile Soil', 'latitude' => -7.61667, 'longitude' => 111.65],
            ['name' => 'Magetan Fertile Land', 'latitude' => -7.64472, 'longitude' => 111.35917],
            ['name' => 'Malang Rich Soil', 'latitude' => -8.16667, 'longitude' => 112.66667],
            ['name' => 'Bandung Fertile Area', 'latitude' => -7.10000, 'longitude' => 107.60000],
            ['name' => 'Ciamis Fertile Zone', 'latitude' => -7.28333, 'longitude' => 108.41667],
            ['name' => 'Bogor Fertile Region', 'latitude' => -6.58333, 'longitude' => 106.71667],
            ['name' => 'Cirebon Fertile Field', 'latitude' => -6.80000, 'longitude' => 108.56667],
            ['name' => 'Garut Fertile Territory', 'latitude' => -7.38333, 'longitude' => 107.76667],
            ['name' => 'Aceh Fertile Land', 'latitude' => 4.69514, 'longitude' => 96.74940],
            ['name' => 'Yogyakarta Fertile Area', 'latitude' => -7.87538, 'longitude' => 110.42621]
        ];

        foreach ($areas as $area) {
            KoordinatTanah::create([
                'name' => $area['name'],
                'latitude' => $area['latitude'],
                'longitude' => $area['longitude']
            ]);
        }
    }
}
