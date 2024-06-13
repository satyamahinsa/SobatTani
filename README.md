# Sobat Tani

## Deskripsi Singkat

SobatTani adalah aplikasi yang dirancang khusus untuk memberikan kemudahan kepada para petani dan generasi muda dalam menjalankan aktivitas pertanian dengan teknik modern saat ini. Tujuan utama dari aplikasi ini adalah sebagai langkah strategis untuk memfasilitasi petani dan khususnya generasi muda dalam mengakses pendidikan, pasar, dan komunitas pertanian.

## Fitur

1. **Kursus**

   Fitur ini memberikan wawasan mendalam mengenai pertanian modern kepada pengguna dalam bentuk video. Konten video ini bisa berupa demonstrasi praktis, wawancara dengan ahli, atau animasi yang menjelaskan konsep kompleks dengan cara yang mudah dipahami.
3. **Toko**

   Fitur ini menampilkan setiap produk yang dilengkapi dengan informasi penting seperti nama, kategori, harga, dan penilaian pengguna terhadap produk. Selain itu juga, terdapat opsi untuk menghubungi penjual langsung melalui Whatsapp.
5. **Harga Pasar**

   Fitur ini menyediakan grafik fluktuasi harga terkini dan informasi yang akurat dan terbaru mengenai harga komoditas pertanian. Setiap komoditas menampilkan grafik, gambar komoditas, nama, deskripsi singkat, harga terkini, dan persentase perubahan harga.
7. **Titik Kesuburan Tanah**

   Fitur ini mengidentifikasi titik-titik kesuburan tanah di daerah pengguna, terutama Pulau Jawa. Marker pada peta menandai lokasi-lokasi dengan kesuburan tanah yang tinggi dengan berisi informasi lebih lanjut tentang masing-masing titik.

## Framework & Library

Website Sobat Tani menggunakan
framework & library sebagai berikut:

1. Laravel 11
2. Tailwind
3. Larevel Breeze
4. Leaflat
5. Apex Charts
6. Sweetalert

## Installation

### Requirement

1. PHP 8.3
2. MySQL 8

### Clone & Installation

1. Please make sure you have database before clone this repo. Database Example: `sobat_tani`
2. Run `git clone https://github.com/satyamahinsa/SobatTani.git`
3. Run `composer install`
4. Run `cp .env.example .env`
5. Run `php artisan key:generate`
6. Run `php artisan migrate:fresh --seed`
7. Run `php artisan serve`
