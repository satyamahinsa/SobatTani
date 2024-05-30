<?php

namespace Database\Seeders;

use App\Models\JualBeli;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JualBeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barangs = [
            [
                'nama' => 'Pupuk Organik Super',
                'harga' => '75.000',
                'penilaian' => 4.8,
                'deskripsi' => 'Pupuk organik berkualitas tinggi untuk meningkatkan kesuburan tanah.',
                'gambar_produk' => 'img/jual-beli/pupuk-organik-super'
            ],
            [
                'nama' => 'Traktor Mini',
                'harga' => '3.500.000',
                'penilaian' => 4.5,
                'deskripsi' => 'Traktor mini dengan efisiensi tinggi untuk lahan pertanian kecil.',
                'gambar_produk' => 'img/jual-beli/pupuk-organik-super'
            ],
            [
                'nama' => 'Bibit Padi Unggul',
                'harga' => '12.000',
                'penilaian' => 4.6,
                'deskripsi' => 'Bibit padi yang tahan terhadap hama dan penyakit.',
                'gambar_produk' => 'img/jual-beli/pupuk-organik-super'
            ],
            [
                'nama' => 'Mesin Pemanen Padi',
                'harga' => '15.000.000',
                'penilaian' => 4.7,
                'deskripsi' => 'Mesin modern untuk mempermudah proses panen padi.',
                'gambar_produk' => 'img/jual-beli/pupuk-organik-super'
            ],
            [
                'nama' => 'Alat Penyemprot Pestisida',
                'harga' => '800.000',
                'penilaian' => 4.4,
                'deskripsi' => 'Alat penyemprot dengan teknologi canggih untuk aplikasi pestisida.',
                'gambar_produk' => 'img/jual-beli/pupuk-organik-super'
            ],
            [
                'nama' => 'Benih Jagung Hibrida',
                'harga' => '8.000',
                'penilaian' => 4.6,
                'deskripsi' => 'Benih jagung hibrida dengan produktivitas tinggi dan adaptabilitas luas.',
                'gambar_produk' => 'img/jual-beli/pupuk-organik-super'
            ],
            [
                'nama' => 'Pupuk Kandang Organik',
                'harga' => '50.000',
                'penilaian' => 4.5,
                'deskripsi' => 'Pupuk kandang dari bahan organik untuk tanaman sehat dan produktif.',
                'gambar_produk' => 'img/jual-beli/pupuk-organik-super'
            ],
            [
                'nama' => 'Alat Pengolah Tanah',
                'harga' => '2.000.000',
                'penilaian' => 4.3,
                'deskripsi' => 'Alat modern untuk mempersiapkan lahan pertanian dengan cepat dan efisien.',
                'gambar_produk' => 'img/jual-beli/pupuk-organik-super'
            ],
            [
                'nama' => 'Bibit Tomat Unggul',
                'harga' => '15.000',
                'penilaian' => 4.7,
                'deskripsi' => 'Bibit tomat dengan hasil panen yang konsisten dan kualitas baik.',
                'gambar_produk' => 'img/jual-beli/pupuk-organik-super'
            ],
            [
                'nama' => 'Peralatan Irigasi Otomatis',
                'harga' => '500.000',
                'penilaian' => 4.4,
                'deskripsi' => 'Sistem irigasi otomatis untuk efisiensi penggunaan air pada lahan pertanian.',
                'gambar_produk' => 'img/jual-beli/pupuk-organik-super'
            ],
            [
                'nama' => 'Pupuk Daun Cair',
                'harga' => '30.000',
                'penilaian' => 4.6,
                'deskripsi' => 'Pupuk daun cair dengan nutrisi lengkap untuk pertumbuhan tanaman optimal.',
                'gambar_produk' => 'img/jual-beli/pupuk-organik-super'
            ],
            [
                'nama' => 'Benih Sayuran Organik',
                'harga' => '10.000',
                'penilaian' => 4.5,
                'deskripsi' => 'Benih sayuran organik untuk kebun atau lahan pertanian organik.',
                'gambar_produk' => 'img/jual-beli/pupuk-organik-super'
            ],
            [
                'nama' => 'Peralatan Tanam Jarak Jauh',
                'harga' => '1.200.000',
                'penilaian' => 4.2,
                'deskripsi' => 'Peralatan untuk menanam tanaman dengan jarak jauh atau vertikultur.',
                'gambar_produk' => 'img/jual-beli/pupuk-organik-super'
            ],
            [
                'nama' => 'Pupuk Buah dan Bunga',
                'harga' => '60.000',
                'penilaian' => 4.4,
                'deskripsi' => 'Pupuk khusus untuk memperbaiki kualitas buah dan bunga.',
                'gambar_produk' => 'img/jual-beli/pupuk-organik-super'
            ],
            [
                'nama' => 'Alat Pengendali Hama',
                'harga' => '400.000',
                'penilaian' => 4.3,
                'deskripsi' => 'Alat modern untuk pengendalian hama secara efektif dan aman.',
                'gambar_produk' => 'img/jual-beli/pupuk-organik-super'
            ],
            [
                'nama' => 'Bibit Jeruk Berkualitas',
                'harga' => '18.000',
                'penilaian' => 4.7,
                'deskripsi' => 'Bibit jeruk dengan rasa yang baik dan tahan terhadap penyakit.',
                'gambar_produk' => 'img/jual-beli/pupuk-organik-super'
            ],
            [
                'nama' => 'Peralatan Panen Buah',
                'harga' => '800.000',
                'penilaian' => 4.5,
                'deskripsi' => 'Peralatan untuk memudahkan proses panen buah dengan cepat dan efisien.',
                'gambar_produk' => 'img/jual-beli/pupuk-organik-super'
            ],
            [
                'nama' => 'Pupuk Mikroba Tanah',
                'harga' => '40.000',
                'penilaian' => 4.6,
                'deskripsi' => 'Pupuk yang mengandung mikroba untuk memperbaiki kesehatan tanah.',
                'gambar_produk' => 'img/jual-beli/pupuk-organik-super'
            ],
            [
                'nama' => 'Benih Melon Premium',
                'harga' => '12.000',
                'penilaian' => 4.8,
                'deskripsi' => 'Benih melon dengan rasa manis dan hasil panen yang melimpah.',
                'gambar_produk' => 'img/jual-beli/pupuk-organik-super'
            ],
            [
                'nama' => 'Peralatan Pemotong Rumput',
                'harga' => '500.000',
                'penilaian' => 4.4,
                'deskripsi' => 'Peralatan untuk memotong rumput secara cepat dan rapi.',
                'gambar_produk' => 'img/jual-beli/pupuk-organik-super'
            ],
        ];

        foreach ($barangs as $barang) {
            JualBeli::create([
                'nama' => $barang['nama'],
                'harga' => $barang['harga'],
                'penilaian' => $barang['penilaian'],
                'deskripsi' => $barang['deskripsi'],
                'gambar_produk' => $barang['gambar_produk']
            ]);
        }
    }
}
