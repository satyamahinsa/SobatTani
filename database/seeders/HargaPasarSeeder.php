<?php

namespace Database\Seeders;

use App\Models\HargaPasar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HargaPasarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $komoditases = [
            [
                'nama' => 'Padi',
                'harga' => '20.000/kg',
                'deskripsi' => 'Padi merupakan sumber utama beras.',
                'persentase' => 2.5,
                'kategori' => 'up',
                'gambar_komoditas' => 'img/harga-pasar/harga-padi.jpg',
            ],
            [
                'nama' => 'Jagung',
                'harga' => '23.000/kg',
                'deskripsi' => 'Jagung adalah bahan pangan penting selain padi.',
                'persentase' => 1.8,
                'kategori' => 'up',
                'gambar_komoditas' => 'img/harga-pasar/harga-jagung.jpg',
            ],
            [
                'nama' => 'Kedelai',
                'harga' => '7.000/kg',
                'deskripsi' => 'Kedelai digunakan untuk membuat tahu dan tempe.',
                'persentase' => 3.1,
                'kategori' => 'down',
                'gambar_komoditas' => 'img/harga-pasar/harga-kedelai.jpg',
            ],
            [
                'nama' => 'Kentang',
                'harga' => '6.000/kg',
                'deskripsi' => 'Kentang dapat diolah menjadi berbagai jenis makanan.',
                'persentase' => 0.5,
                'kategori' => 'down',
                'gambar_komoditas' => 'img/harga-pasar/harga-kentang.jpg',
            ],
            [
                'nama' => 'Wortel',
                'harga' => '24.000/kg',
                'deskripsi' => 'Wortel kaya akan vitamin A.',
                'persentase' => 2.2,
                'kategori' => 'down',
                'gambar_komoditas' => 'img/harga-pasar/harga-wortel.jpg',
            ],
            [
                'nama' => 'Kubis',
                'harga' => '3.500/kg',
                'deskripsi' => 'Kubis adalah sayuran yang kaya serat.',
                'persentase' => 1.4,
                'kategori' => 'up',
                'gambar_komoditas' => 'img/harga-pasar/harga-kubis.jpg',
            ],
            [
                'nama' => 'Bawang Merah',
                'harga' => '15.000/kg',
                'deskripsi' => 'Bawang merah digunakan sebagai bumbu dapur.',
                'persentase' => 4.7,
                'kategori' => 'down',
                'gambar_komoditas' => 'img/harga-pasar/harga-bawang-merah.jpg',
            ],
            [
                'nama' => 'Bawang Putih',
                'harga' => '16.000/kg',
                'deskripsi' => 'Bawang putih memiliki banyak manfaat kesehatan.',
                'persentase' => 3.9,
                'kategori' => 'up',
                'gambar_komoditas' => 'img/harga-pasar/harga-bawang-putih.jpg',
            ],
            [
                'nama' => 'Cabe Merah',
                'harga' => '20.000/kg',
                'deskripsi' => 'Cabe merah memberikan rasa pedas pada masakan.',
                'persentase' => 1.2,
                'kategori' => 'down',
                'gambar_komoditas' => 'img/harga-pasar/harga-cabe-merah.jpg',
            ],
            [
                'nama' => 'Cabe Rawit',
                'harga' => '18.000/kg',
                'deskripsi' => 'Cabe rawit lebih pedas daripada cabe merah.',
                'persentase' => 0.8,
                'kategori' => 'up',
                'gambar_komoditas' => 'img/harga-pasar/harga-cabe-rawit.jpg',
            ],
            [
                'nama' => 'Tomat',
                'harga' => '5.000/kg',
                'deskripsi' => 'Tomat kaya akan likopen dan vitamin C.',
                'persentase' => 2.0,
                'kategori' => 'up',
                'gambar_komoditas' => 'img/harga-pasar/harga-tomat.jpg',
            ],
            [
                'nama' => 'Timun',
                'harga' => '3.000/kg',
                'deskripsi' => 'Timun segar dan baik untuk kesehatan kulit.',
                'persentase' => 1.5,
                'kategori' => 'down',
                'gambar_komoditas' => 'img/harga-pasar/harga-timun.jpg',
            ],
            [
                'nama' => 'Bayam',
                'harga' => '2.500/ikat',
                'deskripsi' => 'Bayam kaya akan zat besi.',
                'persentase' => 3.0,
                'kategori' => 'down',
                'gambar_komoditas' => 'img/harga-pasar/harga-bayam.jpg',
            ],
            [
                'nama' => 'Sawi',
                'harga' => '2.000/kg',
                'deskripsi' => 'Sawi sering digunakan dalam masakan Asia.',
                'persentase' => 1.1,
                'kategori' => 'down',
                'gambar_komoditas' => 'img/harga-pasar/harga-sawi.jpg',
            ],
            [
                'nama' => 'Melon',
                'harga' => '8.000/kg',
                'deskripsi' => 'Melon adalah buah yang manis dan menyegarkan.',
                'persentase' => 2.7,
                'kategori' => 'up',
                'gambar_komoditas' => 'img/harga-pasar/harga-melon.jpg',
            ],
            [
                'nama' => 'Semangka',
                'harga' => '13.500',
                'deskripsi' => 'Semangka kaya akan air dan sangat menyegarkan.',
                'persentase' => 1.9,
                'kategori' => 'up',
                'gambar_komoditas' => 'img/harga-pasar/harga-semangka.jpg',
            ],
            [
                'nama' => 'Pisang',
                'harga' => '12.500/kg',
                'deskripsi' => 'Pisang adalah sumber energi yang baik.',
                'persentase' => 3.3,
                'kategori' => 'up',
                'gambar_komoditas' => 'img/harga-pasar/harga-pisang.jpg',
            ],
            [
                'nama' => 'Apel',
                'harga' => '12.000/kg',
                'deskripsi' => 'Apel memiliki banyak manfaat kesehatan.',
                'persentase' => 1.6,
                'kategori' => 'down',
                'gambar_komoditas' => 'img/harga-pasar/harga-apel.jpg',
            ],
            [
                'nama' => 'Anggur',
                'harga' => '15.000/kg',
                'deskripsi' => 'Anggur kaya akan antioksidan.',
                'persentase' => 2.4,
                'kategori' => 'down',
                'gambar_komoditas' => 'img/harga-pasar/harga-anggur.jpg',
            ],
            [
                'nama' => 'Mangga',
                'harga' => '9.000/kg',
                'deskripsi' => 'Mangga adalah buah yang sangat populer di Indonesia.',
                'persentase' => 2.9,
                'kategori' => 'down',
                'gambar_komoditas' => 'img/harga-pasar/harga-mangga.jpg',
            ],
        ];

        foreach ($komoditases as $komoditas) {
            HargaPasar::create([
                'nama' => $komoditas['nama'],
                'harga' => $komoditas['harga'],
                'deskripsi' => $komoditas['deskripsi'],
                'persentase' => $komoditas['persentase'],
                'kategori' => $komoditas['kategori'],
                'gambar_komoditas' => $komoditas['gambar_komoditas'],
            ]);
        }
    }
}
