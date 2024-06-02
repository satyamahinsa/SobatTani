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
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
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
                <p class="mt-6 text-lg leading-8 text-dark">Menentukan titik kesuburan tanah sangat penting karena membantu optimalisasi produktivitas tanaman dengan memilih tanaman yang sesuai dengan kondisi tanah, serta meningkatkan efisiensi penggunaan pupuk dengan menentukan jenis dan jumlah yang tepat. Ini juga mendukung pengelolaan lahan secara berkelanjutan dengan menjaga kualitas dan keseimbangan nutrisi tanah, serta mengendalikan erosi karena tanah subur lebih baik dalam menahan air.Informasi kesuburan tanah membantu merencanakan sistem irigasi yang efisien, rotasi tanaman yang efektif untuk memperbaiki kualitas tanah, dan memastikan tanaman mendapatkan nutrisi yang dibutuhkan untuk tumbuh sehat. Dengan memanfaatkan OpenStreetMap, petani dapat memvisualisasikan dan memetakan titik lokasi kesuburan tanah dengan lebih mudah.Lokasi pada peta dibawah merupakan tempat titik tanah yg memiliki kadar kesuburan paling baik berdasarkan sumber yg didapatkan.</p>
            </div>
        </div>
        <div class="flex justify-center items-center mx-auto mt-10 max-w-7xl lg:max-w-none px-6 lg:px-8">
            <div id="map" style="width: 100%; height: 500px;"></div>
            <script>
                // Fungsi untuk mendapatkan lokasi acak berdasarkan data dari daftar
                function getRandomLocations(locations, numLocations) {
                    var randomLocations = [];
                    for (var i = 0; i < numLocations; i++) {
                        var randomIndex = Math.floor(Math.random() * locations.length);
                        randomLocations.push(locations[randomIndex]);
                    }
                    return randomLocations;
                }
        
                // Koordinat pusat Pulau Jawa
                var jawaCenter = [-7.6145, 110.7126];
        
                var map = L.map('map').setView(jawaCenter, 7);
        
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(map);
        
                var stations = [
                    { name: 'Madiun Fertile Soil', location: [-7.61667, 111.65] },
                    { name: 'Magetan Fertile Land', location: [-7.64472, 111.35917] },
                    { name: 'Malang Rich Soil', location: [-8.16667, 112.66667] },
                    { name: 'Bandung Fertile Area', location: [-7.10000, 107.60000] },
                    { name: 'Ciamis Fertile Zone', location: [-7.28333, 108.41667] },
                    { name: 'Bogor Fertile Region', location: [-6.58333, 106.71667] },
                    { name: 'Cirebon Fertile Field', location: [-6.80000, 108.56667] },
                    { name: 'Garut Fertile Territory', location: [-7.38333, 107.76667] },
                    { name: 'Yogyakarta Fertile Area', location: [-7.87538, 110.42621] },
                    { name: 'Semarang Fertile Ground', location: [-7.005145, 110.438125] },
                    { name: 'Surabaya Rich Soil', location: [-7.257472, 112.752090] },
                    { name: 'Pekalongan Fertile Ground', location: [-6.88917, 109.67583] },
                    { name: 'Kendal Fertile Area', location: [-7.00611, 110.15944] },
                    { name: 'Karanganyar Fertile Zone', location: [-7.6375, 111.04806] },
                    { name: 'Wonosobo Fertile Territory', location: [-7.3609, 109.9026] },
                    { name: 'Kebumen Fertile Soil', location: [-7.69917, 109.65722] },
                    { name: 'Blora Rich Land', location: [-7.00889, 111.37917] },
                    { name: 'Sragen Fertile Field', location: [-7.41833, 111.03333] },
                    { name: 'Tegal Fertile Region', location: [-6.86944, 109.14056] },
                    { name: 'Purworejo Fertile Ground', location: [-7.71806, 109.96139] },
                    { name: 'Purwokerto Rich Soil', location: [-7.42139, 109.23472] },
                    { name: 'Kudus Fertile Area', location: [-6.80472, 110.84056] },
                    { name: 'Salatiga Fertile Zone', location: [-7.32556, 110.50722] },
                    { name: 'Rembang Fertile Territory', location: [-6.7175, 111.4525] },
                    { name: 'Pati Fertile Soil', location: [-6.75778, 111.03806] },
                    { name: 'Brebes Rich Land', location: [-6.88028, 109.04028] },
                    { name: 'Temanggung Fertile Field', location: [-7.28278, 110.15222] },
                    { name: 'Purbalingga Fertile Region', location: [-7.38556, 109.36361] },
                    { name: 'Klaten Fertile Ground', location: [-7.70583, 110.60667] },
                    { name: 'Ponorogo Fertile Area', location: [-7.86556, 111.45944] },
                    { name: 'Lamongan Fertile Zone', location: [-7.125, 112.38944] },
                    { name: 'Tuban Fertile Territory', location: [-6.9, 112.05] },
                    { name: 'Magelang Fertile Soil', location: [-7.47056, 110.21778] },
                    { name: 'Probolinggo Rich Land', location: [-7.75417, 113.21528] },
                    { name: 'Ngawi Fertile Field', location: [-7.59444, 111.35556] },
                    { name: 'Tulungagung Fertile Region', location: [-8.06667, 111.91667] },
                    { name: 'Indramayu Fertile Soil', location: [-6.3277, 108.3223] },
                    { name: 'Cilacap Fertile Ground', location: [-7.718, 109.021] },
                    { name: 'Pangandaran Fertile Territory', location: [-7.6829, 108.663] },
                    { name: 'Sukabumi Rich Land', location: [-6.9194, 106.9267] },
                    { name: 'Purwakarta Fertile Field', location: [-6.5563, 107.4435] },
                    { name: 'Subang Fertile Region', location: [-6.5716, 107.7606] },
                    { name: 'Bekasi Fertile Zone', location: [-6.2383, 107.0] },
                    { name: 'Cianjur Fertile Area', location: [-6.8222, 107.1393] },
                    { name: 'Garut Fertile Soil', location: [-7.3833, 107.75] },
                    { name: 'Cirebon Fertile Region', location: [-6.737, 108.55] },
                    { name: 'Tasikmalaya Fertile Ground', location: [-7.3275, 108.2208] },
                    { name: 'Serang Fertile Territory', location: [-6.1196, 106.1494] },
                    { name: 'Banten Rich Land', location: [-6.4058, 106.0644] },
                    { name: 'Tangerang Fertile Field', location: [-6.1783, 106.63] },
                    { name: 'Karawang Fertile Zone', location: [-6.3086, 107.3047] },
                    { name: 'Purwakarta Fertile Area', location: [-6.5563, 107.4435] },
                    { name: 'Depok Fertile Soil', location: [-6.4025, 106.7942] }
                ];
        
                function updateMap() {
                    map.eachLayer(function (layer) {
                        if (layer instanceof L.Marker) {
                            map.removeLayer(layer);
                        }
                    });
        
                    var randomLocations = getRandomLocations(stations, 10);
        
                    // Menambahkan marker untuk setiap lokasi acak
                    randomLocations.forEach(function(location) {
                        L.marker(location.location).addTo(map)
                            .bindPopup(location.name);
                    });
                }
        
                // Panggil fungsi updateMap() saat halaman dimuat
                document.addEventListener('DOMContentLoaded', updateMap);
            </script>
        </div>
        
    </div>
    <x-footer></x-footer>
</body>
</html>
