<?php

namespace Database\Seeders;

use App\Models\Toko;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barangs = [
            [
                'nama' => 'Pupuk Organik Super',
                'kategori' => 'pupuk',
                'harga' => '75.000',
                'penilaian' => 4.8,
                'deskripsi' => 'Pupuk organik berkualitas tinggi yang dirancang khusus untuk meningkatkan kesuburan tanah dan produktivitas tanaman. Dirumuskan dari bahan organik terpilih, pupuk ini memberikan nutrisi lengkap yang dibutuhkan oleh tanaman Anda. Dengan konsistensi penggunaan, tanah Anda akan semakin subur dan tanaman Anda akan tumbuh dengan subur dan sehat.',
                'gambar_produk' => 'img/toko/pupuk.jpg',
            ],
            [
                'nama' => 'Traktor Mini',
                'kategori' => 'alat',
                'harga' => '3.500.000',
                'penilaian' => 4.5,
                'deskripsi' => 'Traktor mini yang efisien dan andal, ideal untuk lahan pertanian kecil. Dilengkapi dengan teknologi terbaru, traktor ini memungkinkan Anda untuk bekerja dengan lebih cepat dan efisien, mengurangi waktu dan tenaga yang dibutuhkan untuk mengerjakan lahan. Dengan desain yang kompak namun kuat, traktor ini dapat dengan mudah menavigasi berbagai medan tanah.',
                'gambar_produk' => 'img/toko/tractor.jpeg',
            ],
            [
                'nama' => 'Bibit Padi Unggul',
                'kategori' => 'bibit',
                'harga' => '12.000',
                'penilaian' => 4.6,
                'deskripsi' => 'Bibit padi berkualitas tinggi yang telah dipilih secara cermat untuk ketahanan terhadap hama dan penyakit. Diformulasikan untuk memberikan hasil panen yang maksimal, bibit ini memastikan pertumbuhan tanaman yang sehat dan kuat. Dengan menggunakan bibit ini, Anda dapat meningkatkan produktivitas lahan pertanian Anda dengan hasil yang konsisten.',
                'gambar_produk' => 'img/toko/bibit.jpeg',
            ],
            [
                'nama' => 'Mesin Pemanen Padi',
                'kategori' => 'alat',
                'harga' => '15.000.000',
                'penilaian' => 4.7,
                'deskripsi' => 'Mesin modern yang dirancang khusus untuk mempermudah proses panen padi. Dengan teknologi canggih, mesin ini dapat menghemat waktu dan tenaga dalam proses panen, meningkatkan efisiensi dan produktivitas pertanian Anda. Didesain untuk kenyamanan dan kemudahan penggunaan, mesin ini cocok untuk berbagai skala usaha pertanian.',
                'gambar_produk' => 'img/toko/mesin_pemanen_padi.jpeg',
            ],
            [
                'nama' => 'Alat Penyemprot Pestisida',
                'kategori' => 'alat',
                'harga' => '800.000',
                'penilaian' => 4.4,
                'deskripsi' => 'Alat penyemprot yang dilengkapi dengan teknologi canggih untuk aplikasi pestisida yang efektif. Didesain untuk memberikan pengendalian hama dan penyakit yang optimal tanpa merusak tanaman Anda. Dengan pengaturan yang mudah dan presisi semprotan yang tinggi, alat ini memastikan perlindungan tanaman yang maksimal.',
                'gambar_produk' => 'img/toko/pestisida.jpeg',
            ],
            [
                'nama' => 'Benih Jagung Hibrida',
                'kategori' => 'bibit',
                'harga' => '8.000',
                'penilaian' => 4.6,
                'deskripsi' => 'Benih jagung hibrida yang telah terbukti memberikan produktivitas tinggi dan adaptabilitas luas terhadap berbagai kondisi tanah dan iklim. Dengan kualitas genetik yang unggul, benih ini menghasilkan tanaman jagung yang kuat dan sehat dengan hasil panen yang melimpah. Ideal untuk petani yang mencari konsistensi dalam hasil produksi.',
                'gambar_produk' => 'img/toko/benih-jagung.jpeg',
            ],
            [
                'nama' => 'Pupuk Kandang Organik',
                'kategori' => 'pupuk',
                'harga' => '50.000',
                'penilaian' => 4.5,
                'deskripsi' => 'Pupuk kandang organik yang terbuat dari bahan-bahan alami dan organik, dirancang untuk memberikan nutrisi esensial kepada tanaman Anda. Dengan formula yang dirancang khusus, pupuk ini membantu meningkatkan kesehatan tanah dan merangsang pertumbuhan tanaman yang kuat dan produktif. Mengandung mikroorganisme bermanfaat yang membantu memperbaiki struktur tanah dan meningkatkan retensi air.',
                'gambar_produk' => 'img/toko/pupuk.jpeg',
            ],
            [
                'nama' => 'Alat Pengolah Tanah',
                'kategori' => 'alat',
                'harga' => '2.000.000',
                'penilaian' => 4.3,
                'deskripsi' => 'Alat modern yang dirancang untuk mempersiapkan lahan pertanian dengan cepat dan efisien. Dilengkapi dengan teknologi terkini, alat ini dapat mengoptimalkan proses pengolahan tanah dengan mengurangi waktu dan tenaga yang diperlukan. Didesain untuk kenyamanan pengguna, alat ini cocok untuk berbagai jenis tanah dan skala pertanian.',
                'gambar_produk' => 'img/toko/pengolah-tanah.jpeg',
            ],
            [
                'nama' => 'Bibit Tomat Unggul',
                'kategori' => 'bibit',
                'harga' => '15.000',
                'penilaian' => 4.7,
                'deskripsi' => 'Bibit tomat berkualitas tinggi yang menjamin hasil panen yang konsisten dan berkualitas baik. Dipilih secara cermat dari varietas unggul, bibit ini tumbuh menjadi tanaman tomat yang tangguh dan produktif. Dengan perawatan yang tepat, bibit ini dapat menghasilkan buah tomat dengan rasa yang lezat dan tekstur yang sempurna.',
                'gambar_produk' => 'img/toko/bibit-tomat.jpeg',
            ],
            [
                'nama' => 'Peralatan Irigasi Otomatis',
                'kategori' => 'alat',
                'harga' => '500.000',
                'penilaian' => 4.4,
                'deskripsi' => 'Sistem irigasi otomatis yang dirancang untuk meningkatkan efisiensi penggunaan air pada lahan pertanian. Dengan teknologi canggih, sistem ini memungkinkan Anda untuk mengatur irigasi tanaman secara otomatis sesuai dengan kebutuhan air tanaman. Dilengkapi dengan sensor yang sensitif, sistem ini mengoptimalkan penggunaan air tanah dengan mengurangi pemborosan dan meningkatkan hasil panen.',
                'gambar_produk' => 'img/toko/irigasi.jpeg',
            ],
            [
                'nama' => 'Pupuk Daun Cair',
                'kategori' => 'pupuk',
                'harga' => '30.000',
                'penilaian' => 4.6,
                'deskripsi' => 'Pupuk daun cair yang mengandung nutrisi lengkap untuk pertumbuhan tanaman yang optimal. Dirumuskan khusus untuk memberikan nutrisi langsung ke daun tanaman, pupuk ini membantu meningkatkan klorofil dan metabolisme tanaman. Dengan aplikasi yang mudah dan cepat, pupuk ini cocok untuk berbagai jenis tanaman dan memberikan hasil yang memuaskan.',
                'gambar_produk' => 'img/toko/pupuk-daun.jpeg',
            ],
            [
                'nama' => 'Benih Sayuran Organik',
                'kategori' => 'bibit',
                'harga' => '10.000',
                'penilaian' => 4.5,
                'deskripsi' => 'Benih sayuran organik yang cocok untuk kebun atau lahan pertanian organik Anda. Dipilih dengan teliti dari varietas unggul, benih ini menjamin pertumbuhan tanaman yang sehat dan produktif. Dengan menghasilkan sayuran yang segar dan berkualitas tinggi, benih ini merupakan pilihan yang ideal untuk memulai kebun organik Anda.',
                'gambar_produk' => 'img/toko/benih-sayuran.jpeg',
            ],
            [
                'nama' => 'Peralatan Tanam Jarak Jauh',
                'kategori' => 'alat',
                'harga' => '1.200.000',
                'penilaian' => 4.2,
                'deskripsi' => 'Peralatan yang dirancang khusus untuk menanam tanaman dengan jarak jauh atau vertikultur. Dengan desain yang inovatif, peralatan ini memungkinkan Anda untuk memanfaatkan ruang secara efisien dan meningkatkan produktivitas pertanian Anda. Cocok untuk berbagai jenis tanaman, peralatan ini membuat proses penanaman menjadi lebih mudah dan efektif.',
                'gambar_produk' => 'img/toko/mesin-tanam.jpg',
            ],
            [
                'nama' => 'Pupuk Buah dan Bunga',
                'kategori' => 'pupuk',
                'harga' => '60.000',
                'penilaian' => 4.4,
                'deskripsi' => 'Pupuk khusus yang dirancang untuk memperbaiki kualitas buah dan bunga tanaman Anda. Mengandung nutrisi esensial yang diperlukan untuk fase pembungaan dan pembuahan, pupuk ini membantu memastikan hasil panen buah yang berkualitas dan bunga yang indah. Dengan aplikasi yang teratur, tanaman Anda akan tumbuh dengan subur dan berbunga dengan cantik.',
                'gambar_produk' => 'img/toko/pupuk-buah.jpeg',
            ],
            [
                'nama' => 'Alat Pengendali Hama',
                'kategori' => 'alat',
                'harga' => '400.000',
                'penilaian' => 4.3,
                'deskripsi' => 'Alat modern yang efektif untuk pengendalian hama secara aman dan efisien. Dilengkapi dengan teknologi canggih, alat ini membantu mengurangi populasi hama tanaman tanpa merusak lingkungan sekitar. Dengan penggunaan yang tepat, Anda dapat menjaga tanaman Anda tetap sehat dan produktif tanpa perlu bergantung pada pestisida kimia.',
                'gambar_produk' => 'img/toko/pengendali-hama.jpg',
            ],
            [
                'nama' => 'Bibit Jeruk Berkualitas',
                'kategori' => 'bibit',
                'harga' => '18.000',
                'penilaian' => 4.7,
                'deskripsi' => 'Bibit jeruk yang dipilih khusus untuk rasa yang baik dan ketahanan terhadap penyakit. Diproduksi dari varietas unggul, bibit ini tumbuh menjadi pohon jeruk yang kuat dan produktif. Dengan perawatan yang tepat, bibit ini akan memberikan Anda panen jeruk yang melimpah dengan rasa yang segar dan manis.',
                'gambar_produk' => 'img/toko/bibit-jeruk.jpg',
            ],
            [
                'nama' => 'Drone Pertanian',
                'kategori' => 'alat',
                'harga' => '20.000.000',
                'penilaian' => 4.5,
                'deskripsi' => 'Drone pertanian yang dirancang khusus untuk membantu pemantauan tanaman, penyemprotan pestisida, dan pengumpulan data secara efisien. Dengan teknologi canggih, drone ini mampu menjangkau area yang luas dalam waktu singkat, memberikan solusi presisi untuk manajemen lahan pertanian. Dilengkapi dengan kamera berkualitas tinggi dan sistem navigasi otomatis, drone ini membantu meningkatkan produktivitas dan efektivitas pertanian Anda.',
                'gambar_produk' => 'img/toko/drone-pertanian.jpeg',
            ],            
            [
                'nama' => 'Pupuk Mikroba Tanah',
                'kategori' => 'pupuk',
                'harga' => '40.000',
                'penilaian' => 4.6,
                'deskripsi' => 'Pupuk yang mengandung mikroba bermanfaat untuk memperbaiki kesehatan tanah dan meningkatkan pertumbuhan tanaman. Dengan memperkaya tanah dengan mikroba yang bermanfaat, pupuk ini membantu meningkatkan penyerapan nutrisi tanaman dan meningkatkan keberagaman mikroorganisme dalam tanah. Dengan aplikasi yang teratur, tanah Anda akan menjadi lebih subur dan produktif.',
                'gambar_produk' => 'img/toko/pupuk-mikroba.jpeg',
            ],
            [
                'nama' => 'Benih Melon Premium',
                'kategori' => 'bibit',
                'harga' => '12.000',
                'penilaian' => 4.8,
                'deskripsi' => 'Benih melon premium yang dipilih khusus untuk rasa manis dan hasil panen yang melimpah. Diproduksi dari varietas unggul, benih ini menjamin pertumbuhan tanaman melon yang kuat dan produktif. Dengan perawatan yang tepat, tanaman melon ini akan memberikan Anda buah melon dengan rasa yang lezat dan kualitas yang baik.',
                'gambar_produk' => 'img/toko/benih-melon.jpeg',
            ],
            [
                'nama' => 'Peralatan Pemotong Rumput',
                'kategori' => 'alat',
                'harga' => '500.000',
                'penilaian' => 4.4,
                'deskripsi' => ' Peralatan yang dirancang untuk memotong rumput dengan cepat dan rapi. Dengan pisau yang tajam dan motor yang kuat, peralatan ini memastikan hasil pemotongan rumput yang bersih dan rapi. Cocok untuk digunakan di berbagai jenis lahan, peralatan ini membuat pemeliharaan kebersihan lahan Anda menjadi lebih mudah dan efisien.',
                'gambar_produk' => 'img/toko/pemotong-rumput.jpeg',
            ],
        ];
    
        foreach ($barangs as $barang) {
            Toko::create([
                'nama' => $barang['nama'],
                'kategori' => $barang['kategori'],
                'harga' => $barang['harga'],
                'penilaian' => $barang['penilaian'],
                'deskripsi' => $barang['deskripsi'],
                'gambar_produk' => $barang['gambar_produk'],
            ]);
        }
    }
}
