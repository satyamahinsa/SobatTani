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
        $koordinats = [
            ['name' => 'Madiun Fertile Soil', 'latitude' => -7.61667, 'longitude' => 111.65],
            ['name' => 'Magetan Fertile Land', 'latitude' => -7.64472, 'longitude' => 111.35917],
            ['name' => 'Malang Rich Soil', 'latitude' => -8.16667, 'longitude' => 112.66667],
            ['name' => 'Bandung Fertile Area', 'latitude' => -7.10000, 'longitude' => 107.60000],
            ['name' => 'Ciamis Fertile Zone', 'latitude' => -7.28333, 'longitude' => 108.41667],
            ['name' => 'Bogor Fertile Region', 'latitude' => -6.58333, 'longitude' => 106.71667],
            ['name' => 'Cirebon Fertile Field', 'latitude' => -6.80000, 'longitude' => 108.56667],
            ['name' => 'Garut Fertile Territory', 'latitude' => -7.38333, 'longitude' => 107.76667],
            ['name' => 'Yogyakarta Fertile Area', 'latitude' => -7.87538, 'longitude' => 110.42621],
            ['name' => 'Semarang Fertile Ground', 'latitude' => -7.005145, 'longitude' => 110.438125],
            ['name' => 'Surabaya Rich Soil', 'latitude' => -7.257472, 'longitude' => 112.752090],
            ['name' => 'Pekalongan Fertile Ground', 'latitude' => -6.88917, 'longitude' => 109.67583],
            ['name' => 'Kendal Fertile Area', 'latitude' => -7.00611, 'longitude' => 110.15944],
            ['name' => 'Karanganyar Fertile Zone', 'latitude' => -7.6375, 'longitude' => 111.04806],
            ['name' => 'Wonosobo Fertile Territory', 'latitude' => -7.3609, 'longitude' => 109.9026],
            ['name' => 'Kebumen Fertile Soil', 'latitude' => -7.69917, 'longitude' => 109.65722],
            ['name' => 'Blora Rich Land', 'latitude' => -7.00889, 'longitude' => 111.37917],
            ['name' => 'Sragen Fertile Field', 'latitude' => -7.41833, 'longitude' => 111.03333],
            ['name' => 'Tegal Fertile Region', 'latitude' => -6.86944, 'longitude' => 109.14056],
            ['name' => 'Purworejo Fertile Ground', 'latitude' => -7.71806, 'longitude' => 109.96139],
            ['name' => 'Purwokerto Rich Soil', 'latitude' => -7.42139, 'longitude' => 109.23472],
            ['name' => 'Kudus Fertile Area', 'latitude' => -6.80472, 'longitude' => 110.84056],
            ['name' => 'Salatiga Fertile Zone', 'latitude' => -7.32556, 'longitude' => 110.50722],
            ['name' => 'Rembang Fertile Territory', 'latitude' => -6.7175, 'longitude' => 111.4525],
            ['name' => 'Pati Fertile Soil', 'latitude' => -6.75778, 'longitude' => 111.03806],
            ['name' => 'Brebes Rich Land', 'latitude' => -6.88028, 'longitude' => 109.04028],
            ['name' => 'Temanggung Fertile Field', 'latitude' => -7.28278, 'longitude' => 110.15222],
            ['name' => 'Purbalingga Fertile Region', 'latitude' => -7.38556, 'longitude' => 109.36361],
            ['name' => 'Klaten Fertile Ground', 'latitude' => -7.70583, 'longitude' => 110.60667],
            ['name' => 'Ponorogo Fertile Area', 'latitude' => -7.86556, 'longitude' => 111.45944],
            ['name' => 'Lamongan Fertile Zone', 'latitude' => -7.125, 'longitude' => 112.38944],
            ['name' => 'Tuban Fertile Territory', 'latitude' => -6.9, 'longitude' => 112.05],
            ['name' => 'Magelang Fertile Soil', 'latitude' => -7.47056, 'longitude' => 110.21778],
            ['name' => 'Probolinggo Rich Land', 'latitude' => -7.75417, 'longitude' => 113.21528],
            ['name' => 'Ngawi Fertile Field', 'latitude' => -7.59444, 'longitude' => 111.35556],
            ['name' => 'Tulungagung Fertile Region', 'latitude' => -8.06667, 'longitude' => 111.91667],
            ['name' => 'Indramayu Fertile Soil', 'latitude' => -6.3277, 'longitude' => 108.3223],
            ['name' => 'Cilacap Fertile Ground', 'latitude' => -7.718, 'longitude' => 109.021],
            ['name' => 'Pangandaran Fertile Territory', 'latitude' => -7.6829, 'longitude' => 108.663],
            ['name' => 'Sukabumi Rich Land', 'latitude' => -6.9194, 'longitude' => 106.9267],
            ['name' => 'Purwakarta Fertile Field', 'latitude' => -6.5563, 'longitude' => 107.4435],
            ['name' => 'Subang Fertile Region', 'latitude' => -6.5716, 'longitude' => 107.7606],
            ['name' => 'Bekasi Fertile Zone', 'latitude' => -6.2383, 'longitude' => 107.0],
            ['name' => 'Cianjur Fertile Area', 'latitude' => -6.8222, 'longitude' => 107.1393],
            ['name' => 'Garut Fertile Soil', 'latitude' => -7.3833, 'longitude' => 107.75],
            ['name' => 'Cirebon Fertile Region', 'latitude' => -6.737, 'longitude' => 108.55],
            ['name' => 'Tasikmalaya Fertile Ground', 'latitude' => -7.3275, 'longitude' => 108.2208],
            ['name' => 'Serang Fertile Territory', 'latitude' => -6.1196, 'longitude' => 106.1494],
            ['name' => 'Banten Rich Land', 'latitude' => -6.4058, 'longitude' => 106.0644],
            ['name' => 'Tangerang Fertile Field', 'latitude' => -6.1783, 'longitude' => 106.63],
            ['name' => 'Karawang Fertile Zone', 'latitude' => -6.3086, 'longitude' => 107.3047],
            ['name' => 'Purwakarta Fertile Area', 'latitude' => -6.5563, 'longitude' => 107.4435],
            ['name' => 'Depok Fertile Soil', 'latitude' => -6.4025, 'longitude' => 106.7942],
        ];

        foreach ($koordinats as $koordinat) {
            KoordinatTanah::create([
                'name' => $koordinat['name'],
                'latitude' => $koordinat['latitude'],
                'longitude' => $koordinat['longitude'],
            ]);
        }
    }
}
