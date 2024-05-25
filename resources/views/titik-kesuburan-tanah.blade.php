<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- Menampilkan Map Leaflet --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <title>{{ $title }} | Sobat Tani</title>
</head>
<body>
    <x-navbar></x-navbar>
    <div class="relative isolate overflow-hidden bg-white py-24 sm:py-32">
        <div class="flex justify-center items-center mx-auto max-w-7xl px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-4xl font-bold tracking-tight text-green-700 sm:text-6xl">Titik Kesuburan Tanah</h2>
                <p class="mt-6 text-lg leading-8 text-dark">Menentukan titik kesuburan tanah sangat penting karena membantu optimalisasi produktivitas tanaman dengan memilih tanaman yang sesuai dengan kondisi tanah, serta meningkatkan efisiensi penggunaan pupuk dengan menentukan jenis dan jumlah yang tepat. Ini juga mendukung pengelolaan lahan secara berkelanjutan dengan menjaga kualitas dan keseimbangan nutrisi tanah, serta mengendalikan erosi karena tanah subur lebih baik dalam menahan air.Informasi kesuburan tanah membantu merencanakan sistem irigasi yang efisien, rotasi tanaman yang efektif untuk memperbaiki kualitas tanah, dan memastikan tanaman mendapatkan nutrisi yang dibutuhkan untuk tumbuh sehat. Dengan memanfaatkan OpenStreetMap, petani dapat memvisualisasikan dan memetakan titik lokasi kesuburan tanah dengan lebih mudah.</p>
            </div>
        </div>
        <div class="flex justify-center items-center mx-auto mt-10 max-w-7xl lg:max-w-none px-6 lg:px-8">
            <div id="map" style="width: 100%; height: 500px;"></div>
            <script>
                var map = L.map('map').setView([-2.5489, 118.0149], 4); // Koordinat tengah Indonesia dan level zoom 5
    
                // Tambahkan layer peta dari OpenStreetMap
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; OpenStreetMap</a> contributors'
                }).addTo(map);
        
                // Tambahkan layer untuk menggambar dan mengedit
                var drawnItems = new L.FeatureGroup();
                map.addLayer(drawnItems);
        
                // Inisialisasi plugin Leaflet.draw
                var drawControl = new L.Control.Draw({
                    edit: {
                        featureGroup: drawnItems
                    },
                    draw: {
                        polygon: true, // Aktifkan penggambaran poligon
                        polyline: false, // Nonaktifkan penggambaran polyline
                        circle: false, // Nonaktifkan penggambaran lingkaran
                        rectangle: false, // Nonaktifkan penggambaran persegi panjang
                        marker: true // Aktifkan penggambaran marker
                    }
                });
                map.addControl(drawControl);
        
                // Event listener untuk menangani hasil gambaran/penambahan fitur
                map.on(L.Draw.Event.CREATED, function (event) {
                    var layer = event.layer;
                    drawnItems.addLayer(layer);
        
                    // Mendapatkan koordinat marker yang baru ditambahkan
                    var latLng = layer.getLatLng();
                    swal({
                        title: "Koordinat Lokasi",
                        text: `Latitude : ${latLng.lat},
                         Longitude : ${latLng.lng}`,
                        icon: "success",
                    });
                });
        
                // Tambahkan plugin Leaflet.Control.Geocoder
                L.Control.geocoder().addTo(map);
            </script>
        </div>
        <div class="mt-5 flex items-center justify-center gap-x-5">
            <a href="#" class="rounded-md bg-green-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Daftarkan Titik Kesuburan</a>
        </div>
    </div>
  
    <footer class="bg-green-700 py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Alamat Kantor -->
                <div class="mb-6 md:mb-0">
                    <h2 class="text-2xl text-yellow-300 font-bold mb-2">Kontak Kami</h2>
                    <p class="mb-6 text-white"><i class="fa-solid fa-location-dot"></i> Jl. Pertanian Modern No. 123, Jakarta Selatan, Indonesia</p>
                    <p class="mb-2 text-white"><i class="fa-solid fa-envelope"></i> Email: info@sobattani.com</p>
                    <p class="mb-2 text-white"><i class="fa-solid fa-phone"></i> Telepon: +62 123 456 789</p>
                    <p class="mb-2 text-white"><i class="fa-solid fa-headset"></i> Call Center: 0800-123-4567</p>
                </div>
    
                <!-- Fitur -->
                <div class="mb-6 md:mb-0">
                    <h2 class="text-2xl text-yellow-300 font-bold mb-2">Fitur</h2>
                    <ul>
                        <li class="mb-3 text-white"><a href="#" class="hover:underline">KURSUS</a></li>
                        <li class="mb-3 text-white"><a href="#" class="hover:underline">JUAL BELI</a></li>
                        <li class="mb-3 text-white"><a href="#" class="hover:underline">HARGA PASAR</a></li>
                        <li class="mb-3 text-white"><a href="#" class="hover:underline">TITIK KESUBURAN TANAH</a></li>
                    </ul>
                </div>
    
                <!-- Join Us (Kursus Terkenal) -->
                <div class="mb-6 md:mb-0">
                    <h2 class="text-2xl text-yellow-300 font-bold mb-2">Gabung Bersama Kami!</h2>
                    <ul>
                        <li class="mb-3 text-white"><a href="#" class="hover:underline">Kursus Pertanian Organik</a></li>
                        <li class="mb-3 text-white"><a href="#" class="hover:underline">Pelatihan Teknik Penyiraman</a></li>
                        <li class="mb-3 text-white"><a href="#" class="hover:underline">Seminar Budidaya Tanaman</a></li>
                    </ul>
                </div>
            </div>
            <hr class="mt-3">
            <div class="flex text-yellow-300 justify-center mt-8">
                <a href="https://facebook.com" class="transition-colors hover:text-white ">
                    <i class="fa-brands fa-facebook fa-2x mx-2"></i>
                </a>
                <a href="https://twitter.com" class="transition-colors hover:text-white">
                    <i class="fa-brands fa-twitter fa-2x mx-2"></i>
                </a>
                <a href="https://instagram.com" class="transition-colors hover:text-white">
                    <i class="fa-brands fa-instagram fa-2x mx-2"></i>
                </a>
            </div>
            
            <!-- Copyright -->
            <div class="mt-8 text-white text-center">
                &copy; 2024 SobatTani. All rights reserved.
            </div>
        </div>
    </footer>
</body>
</html>
