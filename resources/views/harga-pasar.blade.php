<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <div class="flex justify-center my-5 items-center mx-auto max-w-7xl px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-4xl font-bold tracking-tight text-green-700 sm:text-6xl">Grafik Harga Pasar</h2>
                <p class="mt-6 text-lg leading-8 text-dark">Grafik dari berbagai komoditas pertanian di Indonesia</p>
            </div>
        </div>
        
        <div class="flex justify-center my-5">
            <div class="relative w-1/2">
                <input type="text" id="commodity-filter" class="border rounded p-2 w-full pl-10" placeholder="Cari komoditas...">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <i class="fa-solid fa-magnifying-glass text-gray-400"></i>
                </div>
            </div>
        </div>

        <ul role="list" class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-8" id="commodity-list">
            @foreach($komoditases as $komoditas)
            <li class="relative rounded-lg border-solid border-2 border-gray-100 shadow-md commodity-item" data-name="{{ $komoditas->nama }}">
                <div class="flex py-5 px-5 min-w-0 gap-x-4">
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50 hover:scale-110 transition-transform duration-200" src="{{ asset($komoditas->gambar_komoditas)}}" alt="{{ $komoditas->nama }}">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">{{ $komoditas->nama }}</p>
                        <p class="mt-1 text-xs leading-5 text-gray-500">{{ $komoditas->deskripsi }}</p>
                    </div>
                </div>
                <div class="w-full mt-3">
                    <div class="flex justify-between px-5">
                        <div>
                            <h5 class="leading-none text-3xl font-bold text-gray-900 pb-2">Rp. {{ $komoditas->harga }}</h5>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Harga {{ $komoditas->nama }}</p>
                        </div>
                        <div class="flex items-center px-2.5 py-2 text-base font-semibold {{ $komoditas->kategori == 'up' ? 'text-green-500' : 'text-red-500' }} text-center">
                            {{ $komoditas->persentase }}%
                            <i class="fa-solid fa-arrow-{{ $komoditas->kategori }} ms-1"></i>
                        </div>
                    </div>
                    <div id="{{ strtolower(str_replace(' ', '-', $komoditas->nama)) }}-chart"></div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        const chartOptions = {
            chart: {
                type: 'line',
                height: 100,
                sparkline: {
                    enabled: true
                }
            },
            colors: ['#EAB308'],
            stroke: {
                curve: 'smooth'
            },
            tooltip: {
                enabled: true,
                theme: 'dark',
                x: {
                    show: false
                },
                y: {
                    title: {
                        formatter: () => ''
                    }
                }
            }
        };

        const komoditases = @json($komoditases);

        komoditases.forEach(komoditas => {
            const chartElementId = `${komoditas.nama.toLowerCase().replace(/\s+/g, '-')}-chart`;
            const chartElement = document.querySelector(`#${chartElementId}`);

            if (chartElement) {
                const harga = parseInt(komoditas.harga.replace(/[^0-9]/g, ""), 10);
                const minHarga = Math.floor(harga * 0.9);
                const maxHarga = Math.ceil(harga * 1.1);
                const data = Array.from({ length: 5 }, () => Math.round(Math.random() * (maxHarga - minHarga) + minHarga));

                const chart = new ApexCharts(chartElement, {
                    ...chartOptions,
                    series: [{
                        data: data
                    }]
                });
                chart.render();
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const commodityFilter = document.getElementById('commodity-filter');
            const commodityItems = document.querySelectorAll('.commodity-item');

            commodityFilter.addEventListener('input', function() {
                const filterValue = this.value.toLowerCase();
                commodityItems.forEach(item => {
                    const commodityName = item.getAttribute('data-name').toLowerCase();
                    if (commodityName.includes(filterValue)) {
                        item.classList.remove('hidden');
                    } else {
                        item.classList.add('hidden');
                    }
                });
            });
        });
    </script>
    <x-footer></x-footer>
</x-layout>
