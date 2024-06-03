<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
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
        
                const stations = @json($koordinats);
        
                function updateMap() {
                    map.eachLayer(function (layer) {
                        if (layer instanceof L.Marker) {
                            map.removeLayer(layer);
                        }
                    });
        
                    var randomLocations = getRandomLocations(stations, 10);
        
                    randomLocations.forEach(function(location) {
                        var coords = [location.latitude, location.longitude];
                        L.marker(coords).addTo(map)
                            .bindPopup(location.name);
                    });
                }
        
                // Panggil fungsi updateMap() saat halaman dimuat
                document.addEventListener('DOMContentLoaded', updateMap);
            </script>
        </div>
        
    </div>
    <x-footer></x-footer>
</x-layout>
