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
                'deskripsi' => 'Pupuk organik berkualitas tinggi yang dirancang khusus untuk meningkatkan kesuburan tanah dan produktivitas tanaman. Dirumuskan dari bahan organik terpilih, pupuk ini memberikan nutrisi lengkap yang dibutuhkan oleh tanaman Anda. Dengan konsistensi penggunaan, tanah Anda akan semakin subur dan tanaman Anda akan tumbuh dengan subur dan sehat.',
                'gambar_produk' => 'img/jual-beli/pupuk.jpg'
            ],
            [
                'nama' => 'Traktor Mini',
                'harga' => '3.500.000',
                'penilaian' => 4.5,
                'deskripsi' => 'Traktor mini yang efisien dan andal, ideal untuk lahan pertanian kecil. Dilengkapi dengan teknologi terbaru, traktor ini memungkinkan Anda untuk bekerja dengan lebih cepat dan efisien, mengurangi waktu dan tenaga yang dibutuhkan untuk mengerjakan lahan. Dengan desain yang kompak namun kuat, traktor ini dapat dengan mudah menavigasi berbagai medan tanah.',
                'gambar_produk' => 'img/jual-beli/tractor.jpeg'
            ],
            [
                'nama' => 'Bibit Padi Unggul',
                'harga' => '12.000',
                'penilaian' => 4.6,
                'deskripsi' => 'Bibit padi berkualitas tinggi yang telah dipilih secara cermat untuk ketahanan terhadap hama dan penyakit. Diformulasikan untuk memberikan hasil panen yang maksimal, bibit ini memastikan pertumbuhan tanaman yang sehat dan kuat. Dengan menggunakan bibit ini, Anda dapat meningkatkan produktivitas lahan pertanian Anda dengan hasil yang konsisten.',
                'gambar_produk' => 'img/jual-beli/bibit.jpeg'
            ],
            [
                'nama' => 'Mesin Pemanen Padi',
                'harga' => '15.000.000',
                'penilaian' => 4.7,
                'deskripsi' => 'Mesin modern yang dirancang khusus untuk mempermudah proses panen padi. Dengan teknologi canggih, mesin ini dapat menghemat waktu dan tenaga dalam proses panen, meningkatkan efisiensi dan produktivitas pertanian Anda. Didesain untuk kenyamanan dan kemudahan penggunaan, mesin ini cocok untuk berbagai skala usaha pertanian.',
                'gambar_produk' => 'img/jual-beli/mesin_pemanen_padi.jpeg'
            ],
            [
                'nama' => 'Alat Penyemprot Pestisida',
                'harga' => '800.000',
                'penilaian' => 4.4,
                'deskripsi' => 'Alat penyemprot yang dilengkapi dengan teknologi canggih untuk aplikasi pestisida yang efektif. Didesain untuk memberikan pengendalian hama dan penyakit yang optimal tanpa merusak tanaman Anda. Dengan pengaturan yang mudah dan presisi semprotan yang tinggi, alat ini memastikan perlindungan tanaman yang maksimal.',
                'gambar_produk' => 'img/jual-beli/pestisida.jpeg'
            ],
            [
                'nama' => 'Benih Jagung Hibrida',
                'harga' => '8.000',
                'penilaian' => 4.6,
                'deskripsi' => 'Benih jagung hibrida yang telah terbukti memberikan produktivitas tinggi dan adaptabilitas luas terhadap berbagai kondisi tanah dan iklim. Dengan kualitas genetik yang unggul, benih ini menghasilkan tanaman jagung yang kuat dan sehat dengan hasil panen yang melimpah. Ideal untuk petani yang mencari konsistensi dalam hasil produksi.',
                'gambar_produk' => 'img/jual-beli/benih-jagung.jpeg'
            ],
            [
                'nama' => 'Pupuk Kandang Organik',
                'harga' => '50.000',
                'penilaian' => 4.5,
                'deskripsi' => 'Pupuk kandang organik yang terbuat dari bahan-bahan alami dan organik, dirancang untuk memberikan nutrisi esensial kepada tanaman Anda. Dengan formula yang dirancang khusus, pupuk ini membantu meningkatkan kesehatan tanah dan merangsang pertumbuhan tanaman yang kuat dan produktif. Mengandung mikroorganisme bermanfaat yang membantu memperbaiki struktur tanah dan meningkatkan retensi air.',
                'gambar_produk' => 'img/jual-beli/pupuk.jpeg'
            ],
            [
                'nama' => 'Alat Pengolah Tanah',
                'harga' => '2.000.000',
                'penilaian' => 4.3,
                'deskripsi' => 'Alat modern yang dirancang untuk mempersiapkan lahan pertanian dengan cepat dan efisien. Dilengkapi dengan teknologi terkini, alat ini dapat mengoptimalkan proses pengolahan tanah dengan mengurangi waktu dan tenaga yang diperlukan. Didesain untuk kenyamanan pengguna, alat ini cocok untuk berbagai jenis tanah dan skala pertanian.',
                'gambar_produk' => 'img/jual-beli/pengolah-tanah.jpeg'
            ],
            [
                'nama' => 'Bibit Tomat Unggul',
                'harga' => '15.000',
                'penilaian' => 4.7,
                'deskripsi' => 'Bibit tomat berkualitas tinggi yang menjamin hasil panen yang konsisten dan berkualitas baik. Dipilih secara cermat dari varietas unggul, bibit ini tumbuh menjadi tanaman tomat yang tangguh dan produktif. Dengan perawatan yang tepat, bibit ini dapat menghasilkan buah tomat dengan rasa yang lezat dan tekstur yang sempurna.',
                'gambar_produk' => 'img/jual-beli/bibit-tomat.jpeg'
            ],
            [
                'nama' => 'Peralatan Irigasi Otomatis',
                'harga' => '500.000',
                'penilaian' => 4.4,
                'deskripsi' => 'Sistem irigasi otomatis yang dirancang untuk meningkatkan efisiensi penggunaan air pada lahan pertanian. Dengan teknologi canggih, sistem ini memungkinkan Anda untuk mengatur irigasi tanaman secara otomatis sesuai dengan kebutuhan air tanaman. Dilengkapi dengan sensor yang sensitif, sistem ini mengoptimalkan penggunaan air tanah dengan mengurangi pemborosan dan meningkatkan hasil panen.',
                'gambar_produk' => 'img/jual-beli/irigasi.jpeg'
            ],
            [
                'nama' => 'Pupuk Daun Cair',
                'harga' => '30.000',
                'penilaian' => 4.6,
                'deskripsi' => 'Pupuk daun cair yang mengandung nutrisi lengkap untuk pertumbuhan tanaman yang optimal. Dirumuskan khusus untuk memberikan nutrisi langsung ke daun tanaman, pupuk ini membantu meningkatkan klorofil dan metabolisme tanaman. Dengan aplikasi yang mudah dan cepat, pupuk ini cocok untuk berbagai jenis tanaman dan memberikan hasil yang memuaskan.',
                'gambar_produk' => 'img/jual-beli/pupuk-daun.jpeg'
            ],
            [
                'nama' => 'Benih Sayuran Organik',
                'harga' => '10.000',
                'penilaian' => 4.5,
                'deskripsi' => 'Benih sayuran organik yang cocok untuk kebun atau lahan pertanian organik Anda. Dipilih dengan teliti dari varietas unggul, benih ini menjamin pertumbuhan tanaman yang sehat dan produktif. Dengan menghasilkan sayuran yang segar dan berkualitas tinggi, benih ini merupakan pilihan yang ideal untuk memulai kebun organik Anda.',
                'gambar_produk' => 'img/jual-beli/benih-sayuran.jpeg'
            ],
            [
                'nama' => 'Peralatan Tanam Jarak Jauh',
                'harga' => '1.200.000',
                'penilaian' => 4.2,
                'deskripsi' => 'Peralatan yang dirancang khusus untuk menanam tanaman dengan jarak jauh atau vertikultur. Dengan desain yang inovatif, peralatan ini memungkinkan Anda untuk memanfaatkan ruang secara efisien dan meningkatkan produktivitas pertanian Anda. Cocok untuk berbagai jenis tanaman, peralatan ini membuat proses penanaman menjadi lebih mudah dan efektif.',
                'gambar_produk' => 'img/jual-beli/mesin-tanam.jpg'
            ],
            [
                'nama' => 'Pupuk Buah dan Bunga',
                'harga' => '60.000',
                'penilaian' => 4.4,
                'deskripsi' => 'Pupuk khusus yang dirancang untuk memperbaiki kualitas buah dan bunga tanaman Anda. Mengandung nutrisi esensial yang diperlukan untuk fase pembungaan dan pembuahan, pupuk ini membantu memastikan hasil panen buah yang berkualitas dan bunga yang indah. Dengan aplikasi yang teratur, tanaman Anda akan tumbuh dengan subur dan berbunga dengan cantik.',
                'gambar_produk' => 'img/jual-beli/pupuk-buah.jpeg'
            ],
            [
                'nama' => 'Alat Pengendali Hama',
                'harga' => '400.000',
                'penilaian' => 4.3,
                'deskripsi' => 'Alat modern yang efektif untuk pengendalian hama secara aman dan efisien. Dilengkapi dengan teknologi canggih, alat ini membantu mengurangi populasi hama tanaman tanpa merusak lingkungan sekitar. Dengan penggunaan yang tepat, Anda dapat menjaga tanaman Anda tetap sehat dan produktif tanpa perlu bergantung pada pestisida kimia.',
                'gambar_produk' => 'img/jual-beli/pengendali-hama.jpg'
            ],
            [
                'nama' => 'Bibit Jeruk Berkualitas',
                'harga' => '18.000',
                'penilaian' => 4.7,
                'deskripsi' => 'Bibit jeruk yang dipilih khusus untuk rasa yang baik dan ketahanan terhadap penyakit. Diproduksi dari varietas unggul, bibit ini tumbuh menjadi pohon jeruk yang kuat dan produktif. Dengan perawatan yang tepat, bibit ini akan memberikan Anda panen jeruk yang melimpah dengan rasa yang segar dan manis.',
                'gambar_produk' => 'img/jual-beli/bibit-jeruk.jpg'
            ],
            [
                'nama' => 'Peralatan Panen Buah',
                'harga' => '800.000',
                'penilaian' => 4.5,
                'deskripsi' => 'Peralatan yang dirancang khusus untuk memudahkan proses panen buah dengan cepat dan efisien. Dilengkapi dengan fitur-fitur yang inovatif, peralatan ini memungkinkan Anda untuk menghemat waktu dan tenaga dalam proses panen. Didesain untuk kenyamanan dan kemudahan penggunaan, peralatan ini merupakan investasi yang baik untuk meningkatkan produktivitas pertanian Anda.',
                'gambar_produk' => 'img/jual-beli/pemanen-buah.jpeg'
            ],
            [
                'nama' => 'Pupuk Mikroba Tanah',
                'harga' => '40.000',
                'penilaian' => 4.6,
                'deskripsi' => 'Pupuk yang mengandung mikroba bermanfaat untuk memperbaiki kesehatan tanah dan meningkatkan pertumbuhan tanaman. Dengan memperkaya tanah dengan mikroba yang bermanfaat, pupuk ini membantu meningkatkan penyerapan nutrisi tanaman dan meningkatkan keberagaman mikroorganisme dalam tanah. Dengan aplikasi yang teratur, tanah Anda akan menjadi lebih subur dan produktif.',
                'gambar_produk' => 'img/jual-beli/pupuk-mikroba.jpeg'
            ],
            [
                'nama' => 'Benih Melon Premium',
                'harga' => '12.000',
                'penilaian' => 4.8,
                'deskripsi' => 'Benih melon premium yang dipilih khusus untuk rasa manis dan hasil panen yang melimpah. Diproduksi dari varietas unggul, benih ini menjamin pertumbuhan tanaman melon yang kuat dan produktif. Dengan perawatan yang tepat, tanaman melon ini akan memberikan Anda buah melon dengan rasa yang lezat dan kualitas yang baik.',
                'gambar_produk' => 'img/jual-beli/benih-melon.jpeg'
            ],
            [
                'nama' => 'Peralatan Pemotong Rumput',
                'harga' => '500.000',
                'penilaian' => 4.4,
                'deskripsi' => ' Peralatan yang dirancang untuk memotong rumput dengan cepat dan rapi. Dengan pisau yang tajam dan motor yang kuat, peralatan ini memastikan hasil pemotongan rumput yang bersih dan rapi. Cocok untuk digunakan di berbagai jenis lahan, peralatan ini membuat pemeliharaan kebersihan lahan Anda menjadi lebih mudah dan efisien.',
                'gambar_produk' => 'img/jual-beli/pemotong-rumput.jpeg'
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
