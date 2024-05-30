<?php

namespace Database\Seeders;

use App\Models\Kursus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KursusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kursuses = [
            [
                'judul' => 'Teknologi Pertanian Terpadu',
                'slug' => 'teknologi-pertanian-terpadu',
                'penulis' => 'Dr. Andi Wijaya',
                'profesi_penulis' => 'Dosen dan Peneliti Pertanian',
                'kategori' => 'Teknologi Pertanian',
                'deskripsi' => 'Kursus ini membahas berbagai teknologi terbaru yang digunakan dalam bidang pertanian untuk meningkatkan efisiensi dan produktivitas. Dalam video ini, peserta akan mempelajari tentang sensor tanah yang dapat mengukur kelembaban, pH, dan nutrisi tanah secara real-time, sehingga petani dapat mengoptimalkan penggunaan pupuk dan air. Selain itu, kursus ini juga memperkenalkan sistem irigasi otomatis yang dapat diatur melalui aplikasi smartphone, memungkinkan pengelolaan air yang lebih presisi dan hemat. Penggunaan big data dan AI dalam pengelolaan pertanian juga menjadi fokus utama, di mana data dari berbagai sumber dapat dianalisis untuk memprediksi pola cuaca, penyakit tanaman, dan kebutuhan nutrisi. Peserta akan mendapatkan pengetahuan praktis mengenai bagaimana teknologi ini dapat diterapkan di lapangan untuk meningkatkan hasil panen. Di samping itu, kursus ini juga mengajarkan tentang drone untuk pemantauan lahan dan penyemprotan pestisida. Peserta akan belajar cara mengoperasikan drone dan menganalisis data yang diperoleh dari udara. Dengan mengikuti kursus ini, petani akan memiliki wawasan luas tentang inovasi teknologi yang dapat diterapkan dalam berbagai aspek pertanian. Kursus ini dirancang untuk semua tingkat pengalaman, dari pemula hingga ahli yang ingin memperbarui pengetahuan mereka. Melalui video-video yang menarik dan informatif, peserta akan dapat melihat contoh penerapan teknologi di berbagai jenis pertanian, dari sawah hingga kebun buah. Kursus ini juga memberikan studi kasus nyata dari petani yang telah berhasil meningkatkan produktivitas mereka dengan bantuan teknologi. Dengan demikian, peserta akan mendapatkan inspirasi dan motivasi untuk mengadopsi teknologi dalam usaha pertanian mereka sendiri. Kursus ini sangat relevan bagi mereka yang ingin memajukan pertanian di Indonesia dan memanfaatkan kemajuan teknologi untuk kesejahteraan petani.',
                'gambar_kursus' => 'img/kursus/teknologi-pertanian-terpadu.jpg',
                'gambar_penulis' => 'https://randomuser.me/api/portraits/men/1.jpg',
                'link_video' => 'https://www.youtube.com/embed/SSo01tbdXI4?si=vKZjpiIJjdopkEX1'
            ],
            [
                'judul' => 'Pengenalan Pertanian Organik',
                'slug' => 'pengenalan-pertanian-organik',
                'penulis' => 'Ir. Siti Nurhayati',
                'profesi_penulis' => 'Pakar Pertanian Organik',
                'kategori' => 'Pertanian Organik',
                'deskripsi' => 'Kursus ini memberikan pengetahuan dasar mengenai pertanian organik dan manfaatnya bagi lingkungan serta kesehatan manusia. Video ini mencakup metode penanaman tanpa bahan kimia sintetis, penggunaan pupuk alami, serta teknik kompos dan rotasi tanaman. Peserta akan belajar bagaimana membangun dan mengelola kebun organik yang berkelanjutan. Dalam kursus ini, dijelaskan tentang prinsip-prinsip dasar pertanian organik yang mengutamakan keseimbangan ekosistem dan keanekaragaman hayati. Peserta akan memahami pentingnya menjaga kesehatan tanah sebagai dasar pertanian organik yang sukses. Teknik-teknik pengelolaan hama dan penyakit tanaman tanpa bahan kimia sintetis juga dibahas, termasuk penggunaan predator alami dan tanaman pengusir hama. Selain itu, kursus ini juga mengajarkan tentang sertifikasi organik dan cara memenuhi standar yang diperlukan untuk mendapatkan label organik. Peserta akan diperkenalkan pada berbagai jenis pupuk organik, seperti kompos, pupuk kandang, dan pupuk hijau, serta cara membuatnya sendiri. Teknik-teknik irigasi yang efisien dan ramah lingkungan juga dibahas dalam kursus ini. Peserta akan mendapatkan pengetahuan tentang pengelolaan air yang efektif untuk mendukung pertumbuhan tanaman tanpa merusak lingkungan. Dengan mengikuti kursus ini, peserta akan memiliki dasar yang kuat untuk memulai usaha pertanian organik atau meningkatkan praktik pertanian yang sudah ada. Kursus ini sangat relevan bagi mereka yang peduli dengan lingkungan dan ingin berkontribusi pada pertanian berkelanjutan. Peserta juga akan belajar tentang pasar organik dan bagaimana memasarkan produk organik secara efektif. Kursus ini memberikan panduan praktis untuk mengembangkan jaringan distribusi dan menjual produk organik dengan harga premium. Dengan pengetahuan ini, peserta dapat membangun usaha pertanian organik yang sukses dan menguntungkan.',
                'gambar_kursus' => 'img/kursus/pengenalan-pertanian-organik.jpg',
                'gambar_penulis' => 'https://randomuser.me/api/portraits/women/1.jpg',
                'link_video' => 'https://www.youtube.com/embed/YxYvJhEqC98?si=1JeqVZ_QVrEC3r_u'
            ],
            [
                'judul' => 'Manajemen Irigasi Modern',
                'slug' => 'manajemen-irigasi-modern',
                'penulis' => 'Prof. Bambang Suprapto',
                'profesi_penulis' => 'Ahli Irigasi dan Dosen',
                'kategori' => 'Teknologi Pertanian',
                'deskripsi' => 'Kursus ini mengajarkan teknik-teknik irigasi modern yang efektif dalam mengelola sumber daya air untuk pertanian. Video ini meliputi penggunaan sistem irigasi tetes, irigasi sprinkler, dan teknologi pengendalian kelembaban tanah. Selain itu, peserta juga akan belajar tentang pemanfaatan perangkat IoT untuk memantau dan mengatur irigasi secara real-time. Dalam kursus ini, peserta akan mempelajari bagaimana irigasi yang efisien dapat meningkatkan hasil panen dan mengurangi penggunaan air. Teknik irigasi tetes, misalnya, dapat menghemat hingga 50% air dibandingkan dengan metode irigasi tradisional. Sistem ini memberikan air langsung ke akar tanaman, mengurangi penguapan dan limpasan. Irigasi sprinkler juga dibahas, termasuk cara memilih dan memasang sistem yang tepat untuk berbagai jenis tanaman dan kondisi lahan. Kursus ini juga mengajarkan tentang penggunaan sensor kelembaban tanah yang dapat memberikan data akurat tentang kebutuhan air tanaman. Dengan informasi ini, petani dapat mengatur irigasi secara lebih tepat waktu dan efisien. Teknologi IoT memainkan peran penting dalam manajemen irigasi modern, memungkinkan pemantauan dan kontrol sistem irigasi dari jarak jauh melalui aplikasi smartphone atau komputer. Peserta akan belajar cara mengintegrasikan teknologi ini ke dalam sistem irigasi mereka. Selain itu, kursus ini juga membahas aspek ekonomi dari manajemen irigasi, termasuk analisis biaya dan manfaat dari berbagai sistem irigasi. Peserta akan memahami bagaimana investasi dalam teknologi irigasi dapat memberikan pengembalian yang signifikan dalam jangka panjang. Dengan mengikuti kursus ini, petani akan memiliki pengetahuan dan keterampilan untuk mengelola sumber daya air dengan lebih baik, meningkatkan efisiensi penggunaan air, dan mendukung pertanian berkelanjutan. Kursus ini sangat relevan bagi mereka yang ingin meningkatkan produktivitas pertanian dan mengurangi dampak lingkungan dari penggunaan air yang berlebihan. Peserta juga akan belajar tentang kebijakan dan regulasi terkait manajemen air di sektor pertanian. Dengan pemahaman ini, peserta dapat memastikan bahwa praktik irigasi mereka sesuai dengan standar dan peraturan yang berlaku.',
                'gambar_kursus' => 'img/kursus/manajemen-irigasi-modern.jpg',
                'gambar_penulis' => 'https://randomuser.me/api/portraits/men/2.jpg',
                'link_video' => 'https://www.youtube.com/embed/oYYRgc75b_A?si=HTHg9JjXTOHqRs_L'
            ],
            [
                'judul' => 'Pemanfaatan Drone dalam Pertanian',
                'slug' => 'pemanfaatan-drone-dalam-pertanian',
                'penulis' => 'Dr. Rina Handayani',
                'profesi_penulis' => 'Peneliti Teknologi Pertanian',
                'kategori' => 'Teknologi Pertanian',
                'deskripsi' => 'Kursus ini menjelaskan cara penggunaan drone untuk pemantauan dan pengelolaan lahan pertanian secara efisien. Video ini mencakup tutorial tentang pengoperasian drone, pengambilan gambar udara untuk analisis lahan, serta aplikasi drone dalam penyemprotan pestisida dan pemupukan. Peserta akan memahami bagaimana teknologi drone dapat meningkatkan produktivitas dan mengurangi biaya operasional. Dalam kursus ini, peserta akan mempelajari berbagai jenis drone yang digunakan dalam pertanian, dari drone kecil untuk pengamatan hingga drone besar untuk aplikasi penyemprotan. Tutorial pengoperasian drone akan mencakup cara kalibrasi, penerbangan dasar, dan pengaturan kamera. Peserta juga akan belajar cara menginterpretasikan data yang diperoleh dari gambar udara untuk membuat peta lahan dan mengidentifikasi area yang memerlukan perhatian khusus. Penggunaan drone untuk penyemprotan pestisida dan pemupukan juga dibahas secara mendetail. Peserta akan melihat demonstrasi bagaimana drone dapat menyemprotkan pestisida dengan presisi, mengurangi penggunaan bahan kimia dan meningkatkan efektivitas aplikasi. Selain itu, kursus ini juga mengajarkan tentang perawatan dan pemeliharaan drone, termasuk cara mengganti komponen dan memperbaiki masalah umum. Teknologi drone juga dapat digunakan untuk pemantauan tanaman, seperti mengidentifikasi tanda-tanda awal penyakit atau kekurangan nutrisi. Dengan informasi ini, petani dapat mengambil tindakan cepat untuk mengatasi masalah sebelum menjadi lebih serius. Kursus ini juga mencakup aspek hukum dan regulasi penggunaan drone dalam pertanian. Peserta akan memahami peraturan penerbangan drone dan cara mendapatkan izin yang diperlukan. Dengan mengikuti kursus ini, petani akan memiliki keterampilan untuk mengintegrasikan teknologi drone ke dalam praktik pertanian mereka, meningkatkan efisiensi dan produktivitas. Kursus ini sangat relevan bagi mereka yang ingin memanfaatkan teknologi terbaru untuk memantau dan mengelola lahan pertanian secara lebih efektif. Peserta juga akan belajar tentang inovasi terbaru dalam teknologi drone dan bagaimana tren ini dapat berdampak pada masa depan pertanian.',
                'gambar_kursus' => 'img/kursus/pemanfaatan-drone-dalam-pertanian.jpg',
                'gambar_penulis' => 'https://randomuser.me/api/portraits/women/2.jpg',
                'link_video' => 'https://www.youtube.com/embed/l4kU1rctdnM?si=KS3JONAbY8GjBw0B'
            ],
            [
                'judul' => 'Pemasaran Hasil Pertanian Digital',
                'slug' => 'pemasaran-hasil-pertanian-digital',
                'penulis' => 'Ir. Wahyu Pratama',
                'profesi_penulis' => 'Konsultan Pemasaran Digital',
                'kategori' => 'Pemasaran Digital',
                'deskripsi' => 'Kursus ini memberikan strategi pemasaran digital untuk produk-produk pertanian, termasuk penggunaan media sosial dan e-commerce. Dalam video ini, peserta akan belajar tentang pembuatan konten pemasaran, teknik optimasi mesin pencari (SEO), serta manajemen toko online. Kursus ini juga membahas cara membangun merek pertanian yang kuat dan mengembangkan jaringan distribusi digital. Dalam kursus ini, peserta akan mempelajari bagaimana menggunakan platform media sosial seperti Instagram, Facebook, dan Twitter untuk mempromosikan produk pertanian. Teknik pembuatan konten yang menarik dan informatif juga dijelaskan, termasuk cara mengambil foto produk yang bagus dan menulis deskripsi yang menarik. SEO merupakan bagian penting dari pemasaran digital, dan kursus ini mengajarkan cara mengoptimalkan situs web agar mudah ditemukan oleh mesin pencari. Peserta akan belajar tentang penggunaan kata kunci, meta tag, dan backlink untuk meningkatkan visibilitas online. Selain itu, kursus ini juga mengajarkan tentang manajemen toko online, termasuk cara mengatur katalog produk, sistem pembayaran, dan pengiriman. Peserta akan mendapatkan pengetahuan tentang berbagai platform e-commerce yang dapat digunakan untuk menjual produk pertanian, seperti Tokopedia, Bukalapak, dan Shopee. Strategi pemasaran email juga dibahas, termasuk cara membuat daftar email pelanggan dan mengirimkan newsletter yang efektif. Kursus ini juga memberikan panduan tentang analisis data dan penggunaan alat analitik untuk memantau kinerja kampanye pemasaran. Dengan memahami data ini, peserta dapat mengoptimalkan strategi pemasaran mereka untuk hasil yang lebih baik. Kursus ini sangat relevan bagi petani dan pengusaha agribisnis yang ingin meningkatkan penjualan dan menjangkau pasar yang lebih luas. Peserta akan belajar cara membangun merek pertanian yang kuat, menciptakan hubungan baik dengan pelanggan, dan mengembangkan jaringan distribusi digital yang efisien. Kursus ini juga mencakup studi kasus dari petani dan pengusaha sukses yang telah berhasil menggunakan strategi pemasaran digital untuk meningkatkan bisnis mereka. Dengan mengikuti kursus ini, peserta akan memiliki keterampilan untuk memasarkan produk pertanian mereka secara efektif di era digital.',
                'gambar_kursus' => 'img/kursus/pemasaran-hasil-pertanian-digital.jpg',
                'gambar_penulis' => 'https://randomuser.me/api/portraits/men/3.jpg',
                'link_video' => 'https://www.youtube.com/embed/lRjOn3B6QaY?si=nWH7V2aHmPnKfYbK'
            ],
            [
                'judul' => 'Pengelolaan Lahan Pertanian Berkelanjutan',
                'slug' => 'pengelolaan-lahan-pertanian-berkelanjutan',
                'penulis' => 'Prof. Rudi Hartono',
                'profesi_penulis' => 'Ahli Agronomi dan Peneliti',
                'kategori' => 'Pertanian Berkelanjutan',
                'deskripsi' => 'Kursus ini membahas prinsip-prinsip dasar pengelolaan lahan pertanian yang berkelanjutan, dengan fokus pada praktik-praktik yang menjaga kesehatan tanah dan ekosistem. Peserta akan mempelajari teknik-teknik pengelolaan tanah seperti rotasi tanaman, penutup tanah, dan pengomposan. Video ini juga menjelaskan tentang pentingnya keanekaragaman hayati dan cara mengintegrasikan tanaman penutup tanah dan tanaman pengusir hama alami ke dalam sistem pertanian. Peserta akan memahami bagaimana mengelola sumber daya alam secara efisien untuk mendukung produksi pertanian jangka panjang. Kursus ini sangat relevan bagi petani dan pengelola lahan yang ingin mempraktikkan pertanian berkelanjutan dan mengurangi dampak negatif terhadap lingkungan. Peserta juga akan mempelajari tentang metode konservasi air, termasuk teknik irigasi hemat air dan pemanfaatan kembali air limbah. Dengan mengikuti kursus ini, peserta akan mendapatkan pengetahuan praktis yang dapat diterapkan di lapangan untuk meningkatkan keberlanjutan pertanian mereka. Kursus ini juga mencakup studi kasus dari petani yang telah berhasil mengimplementasikan praktik-praktik berkelanjutan dan meningkatkan hasil panen mereka. Peserta akan diajarkan tentang pentingnya memelihara kesehatan tanah melalui pengujian dan pemantauan rutin. Selain itu, kursus ini juga memberikan wawasan tentang inovasi terbaru dalam pertanian berkelanjutan dan bagaimana teknologi dapat digunakan untuk mendukung praktik-praktik tersebut.',
                'gambar_kursus' => 'img/kursus/pengelolaan-lahan-pertanian-berkelanjutan.jpg',
                'gambar_penulis' => 'https://randomuser.me/api/portraits/men/4.jpg',
                'link_video' => 'https://www.youtube.com/embed/0cGDOSW4W28?si=-XGz_iBpi9GihJHK'
            ],
            [
                'judul' => 'Pertanian Vertikal dan Hidroponik',
                'slug' => 'pertanian-vertikal-dan-hidroponik',
                'penulis' => 'Ir. Lestari Wulandari',
                'profesi_penulis' => 'Pakar Hidroponik',
                'kategori' => 'Teknologi Pertanian',
                'deskripsi' => 'Kursus ini memberikan panduan lengkap tentang pertanian vertikal dan sistem hidroponik, yang menjadi solusi inovatif untuk pertanian di lahan terbatas. Peserta akan mempelajari berbagai jenis sistem hidroponik, seperti NFT (Nutrient Film Technique), DWC (Deep Water Culture), dan aeroponik. Video ini juga menjelaskan tentang cara mempersiapkan nutrisi yang tepat untuk tanaman hidroponik dan bagaimana mengelola lingkungan tumbuh untuk memastikan pertumbuhan optimal. Selain itu, kursus ini mengajarkan teknik-teknik pembuatan struktur vertikal yang efisien dan ekonomis. Peserta akan melihat contoh penerapan pertanian vertikal di berbagai skala, dari skala rumah tangga hingga komersial. Kursus ini juga membahas tentang pemeliharaan dan perawatan tanaman hidroponik, termasuk pencegahan dan pengendalian hama dan penyakit. Dengan mengikuti kursus ini, peserta akan mendapatkan pengetahuan dan keterampilan untuk memulai atau meningkatkan usaha pertanian vertikal dan hidroponik mereka. Peserta akan memahami bagaimana memanfaatkan ruang vertikal untuk meningkatkan produksi tanaman di lahan terbatas. Kursus ini juga mencakup aspek ekonomi dari pertanian vertikal dan hidroponik, termasuk analisis biaya dan potensi keuntungan. Peserta akan mendapatkan tips praktis tentang cara memasarkan produk hasil pertanian vertikal dan hidroponik. Dengan demikian, kursus ini sangat relevan bagi mereka yang ingin memanfaatkan teknologi terbaru untuk meningkatkan produksi pertanian di lingkungan urban atau dengan lahan yang terbatas.',
                'gambar_kursus' => 'img/kursus/pertanian-vertikal-dan-hidroponik.jpg',
                'gambar_penulis' => 'https://randomuser.me/api/portraits/women/3.jpg',
                'link_video' => 'https://www.youtube.com/embed/GfJESQKx2k0?si=ZVuezH3lzJAtaiIg'
            ],
            [
                'judul' => 'Teknik Budidaya Tanaman Hortikultura',
                'slug' => 'teknik-budidaya-tanaman-hortikultura',
                'penulis' => 'Dr. Syarif Hidayat',
                'profesi_penulis' => 'Dosen dan Peneliti Hortikultura',
                'kategori' => 'Hortikultura',
                'deskripsi' => 'Kursus ini membahas teknik-teknik budidaya berbagai jenis tanaman hortikultura, seperti sayuran, buah-buahan, dan tanaman hias. Peserta akan mempelajari cara memilih varietas yang sesuai, persiapan lahan, penanaman, dan pemeliharaan tanaman. Video ini juga menjelaskan tentang teknik pemangkasan, pemupukan, dan pengendalian hama dan penyakit yang efektif. Selain itu, kursus ini mengajarkan tentang metode penyimpanan dan pengolahan hasil panen untuk menjaga kualitas dan nilai jual produk. Peserta akan melihat contoh-contoh praktik budidaya hortikultura yang sukses dari berbagai daerah. Kursus ini juga membahas tentang pentingnya pengelolaan lingkungan tumbuh, seperti pencahayaan, suhu, dan kelembaban, untuk mendukung pertumbuhan tanaman yang optimal. Dengan mengikuti kursus ini, peserta akan mendapatkan pengetahuan praktis yang dapat diterapkan langsung di kebun atau lahan mereka. Kursus ini sangat relevan bagi petani dan pekebun yang ingin meningkatkan teknik budidaya mereka dan menghasilkan produk hortikultura berkualitas tinggi. Peserta juga akan mempelajari tentang inovasi terbaru dalam teknologi budidaya hortikultura, termasuk penggunaan alat dan perangkat modern. Kursus ini memberikan tips tentang cara meningkatkan efisiensi dan produktivitas budidaya hortikultura melalui perencanaan dan manajemen yang baik. Dengan pengetahuan ini, peserta dapat memaksimalkan hasil panen dan meningkatkan keuntungan dari usaha pertanian hortikultura mereka.',
                'gambar_kursus' => 'img/kursus/teknik-budidaya-tanaman-hortikultura.jpg',
                'gambar_penulis' => 'https://randomuser.me/api/portraits/men/5.jpg',
                'link_video' => 'https://www.youtube.com/embed/RNT3bs4SRaQ?si=kT1XoDSAYRvD3MYD'
            ],
            [
                'judul' => 'Pemanfaatan Teknologi IoT dalam Pertanian',
                'slug' => 'pemanfaatan-teknologi-iot-dalam-pertanian',
                'penulis' => 'Joko Santoso',
                'profesi_penulis' => 'Peneliti Teknologi Pertanian',
                'kategori' => 'Teknologi Pertanian',
                'deskripsi' => 'Kursus ini menjelaskan bagaimana teknologi Internet of Things (IoT) dapat digunakan untuk meningkatkan efisiensi dan produktivitas pertanian. Peserta akan mempelajari cara mengintegrasikan sensor dan perangkat IoT ke dalam sistem pertanian untuk memantau kondisi lingkungan dan kesehatan tanaman secara real-time. Video ini juga mencakup tutorial tentang pengaturan dan penggunaan perangkat IoT, seperti sensor kelembaban tanah, sensor suhu, dan kamera pemantau. Kursus ini mengajarkan cara mengumpulkan dan menganalisis data dari perangkat IoT untuk membuat keputusan yang lebih baik dalam manajemen pertanian. Peserta akan melihat contoh penerapan teknologi IoT dalam berbagai jenis pertanian, dari sawah hingga peternakan. Dengan mengikuti kursus ini, peserta akan mendapatkan keterampilan untuk mengimplementasikan teknologi IoT di lahan pertanian mereka sendiri.Kursus ini juga membahas tentang keamanan data dan cara melindungi sistem IoT dari ancaman cyber. Peserta akan mempelajari tentang perangkat lunak dan aplikasi yang dapat digunakan untuk mengelola data IoT secara efektif. Kursus ini sangat relevan bagi mereka yang ingin memanfaatkan teknologi terbaru untuk meningkatkan efisiensi operasional dan produktivitas pertanian. Peserta juga akan belajar tentang tren terbaru dalam teknologi IoT dan bagaimana inovasi ini dapat berdampak pada masa depan pertanian. Dengan pengetahuan ini, peserta dapat memanfaatkan teknologi IoT untuk menciptakan sistem pertanian yang lebih cerdas dan efisien.',
                'gambar_kursus' => 'img/kursus/pemanfaatan-teknologi-iot-dalam-pertanian.jpg',
                'gambar_penulis' => 'https://randomuser.me/api/portraits/men/6.jpg',
                'link_video' => 'https://www.youtube.com/embed/GuG19rEM4XQ?si=sTPG321j4ApDzV70'
            ],
            [
                'judul' => 'Teknik Budidaya Pertanian Modern',
                'slug' => 'teknik-budidaya-pertanian-modern',
                'penulis' => 'Agus Widodo',
                'profesi_penulis' => 'Ahli Budidaya Pertanian',
                'kategori' => 'Pertanian Berkelanjutan',
                'deskripsi' => 'Kursus ini memberikan panduan lengkap tentang teknik-teknik budidaya perikanan modern yang efisien dan berkelanjutan. Peserta akan mempelajari berbagai metode budidaya ikan, seperti sistem akuakultur intensif, sistem bioflok, dan sistem RAS (Recirculating Aquaculture System). Video ini juga menjelaskan tentang persiapan kolam atau tangki, pemilihan bibit ikan yang berkualitas, dan manajemen pakan. Selain itu, kursus ini mengajarkan tentang pengendalian kualitas air, termasuk penggunaan perangkat pengukur kualitas air dan cara mengelola parameter penting seperti pH, suhu, dan oksigen terlarut. Peserta akan memahami bagaimana menjaga kesehatan ikan dan mencegah penyakit melalui praktik manajemen kesehatan yang baik. Kursus ini juga mencakup teknik-teknik pemanenan dan penanganan pascapanen untuk menjaga kualitas ikan. Dengan mengikuti kursus ini, peserta akan mendapatkan pengetahuan dan keterampilan untuk mengelola usaha budidaya perikanan yang sukses. Kursus ini sangat relevan bagi mereka yang ingin memanfaatkan teknologi modern untuk meningkatkan efisiensi dan produktivitas budidaya ikan. Peserta juga akan mempelajari tentang inovasi terbaru dalam teknologi budidaya perikanan, termasuk penggunaan perangkat IoT dan otomatisasi. Kursus ini memberikan tips praktis tentang cara meningkatkan hasil produksi dan mengoptimalkan penggunaan sumber daya. Dengan pengetahuan ini, peserta dapat memaksimalkan potensi usaha budidaya perikanan mereka dan meningkatkan keuntungan.',
                'gambar_kursus' => 'img/kursus/teknik-budidaya-pertanian-modern.jpg',
                'gambar_penulis' => 'https://randomuser.me/api/portraits/men/7.jpg',
                'link_video' => 'https://www.youtube.com/embed/ZAma7yCHOrM?si=rQsLh3joQlKWR8MP'
            ]
        ];
        
        foreach($kursuses as $kursus) {
            Kursus::create([
                'judul' => $kursus['judul'],
                'slug' => $kursus['slug'],
                'penulis' => $kursus['penulis'],
                'profesi_penulis' => $kursus['profesi_penulis'],
                'kategori' => $kursus['kategori'], 
                'deskripsi' => $kursus['deskripsi'],
                'gambar_kursus' => $kursus['gambar_kursus'],
                'gambar_penulis' => $kursus['gambar_penulis'],
                'link_video' => $kursus['link_video']
            ]);
        }
    }
}
