<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <div class="flex justify-center my-5 items-center mx-auto max-w-7xl px-6 lg:px-8">
          <div class="text-center">
              <h2 class="text-4xl font-bold tracking-tight text-green-700 sm:text-6xl">Grafik Harga Pasar</h2>
              <p class="mt-6 text-lg leading-8 text-dark">Grafik dari berbagai komoditas pertanian di Indonesia</p>
          </div>
      </div>
      <ul role="list" class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-8">
        @foreach($komoditases as $komoditas)
        <li class="relative rounded-lg border-solid border-2 border-gray-100 shadow-md">
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

    const komoditases = [
        { nama: 'Padi', harga: '20.000/kg', deskripsi: 'Padi merupakan sumber utama beras.', persentase: 2.5, kategori: 'up', gambar_komoditas: 'img/harga-pasar/harga-padi.jpg' },
        { nama: 'Jagung', harga: '23.000/kg', deskripsi: 'Jagung adalah bahan pangan penting selain padi.', persentase: 1.8, kategori: 'up', gambar_komoditas: 'img/harga-pasar/harga-jagung.jpg' },
        { nama: 'Kedelai', harga: '7.000/kg', deskripsi: 'Kedelai digunakan untuk membuat tahu dan tempe.', persentase: 3.1, kategori: 'down', gambar_komoditas: 'img/harga-pasar/harga-kedelai.jpg' },
        { nama: 'Kentang', harga: '6.000/kg', deskripsi: 'Kentang dapat diolah menjadi berbagai jenis makanan.', persentase: 0.5, kategori: 'down', gambar_komoditas: 'img/harga-pasar/harga-kentang.jpg' },
        { nama: 'Wortel', harga: '24.000/kg', deskripsi: 'Wortel kaya akan vitamin A.', persentase: 2.2, kategori: 'down', gambar_komoditas: 'img/harga-pasar/harga-wortel.jpg' },
        { nama: 'Kubis', harga: '3.500/kg', deskripsi: 'Kubis adalah sayuran yang kaya serat.', persentase: 1.4, kategori: 'up', gambar_komoditas: 'img/harga-pasar/harga-kubis.jpg' },
        { nama: 'Bawang Merah', harga: '15.000/kg', deskripsi: 'Bawang merah digunakan sebagai bumbu dapur.', persentase: 4.7, kategori: 'down', gambar_komoditas: 'img/harga-pasar/harga-bawang-merah.jpg' },
        { nama: 'Bawang Putih', harga: '16.000/kg', deskripsi: 'Bawang putih memiliki banyak manfaat kesehatan.', persentase: 3.9, kategori: 'up', gambar_komoditas: 'img/harga-pasar/harga-bawang-putih.jpg' },
        { nama: 'Cabe Merah', harga: '20.000/kg', deskripsi: 'Cabe merah memberikan rasa pedas pada masakan.', persentase: 1.2, kategori: 'down', gambar_komoditas: 'img/harga-pasar/harga-cabe-merah.jpg' },
        { nama: 'Cabe Rawit', harga: '18.000/kg', deskripsi: 'Cabe rawit lebih pedas daripada cabe merah.', persentase: 0.8, kategori: 'up', gambar_komoditas: 'img/harga-pasar/harga-cabe-rawit.jpg' },
        { nama: 'Tomat', harga: '5.000/kg', deskripsi: 'Tomat kaya akan likopen dan vitamin C.', persentase: 2.0, kategori: 'up', gambar_komoditas: 'img/harga-pasar/harga-tomat.jpg' },
        { nama: 'Timun', harga: '3.000/kg', deskripsi: 'Timun segar dan baik untuk kesehatan kulit.', persentase: 1.5, kategori: 'down', gambar_komoditas: 'img/harga-pasar/harga-timun.jpg' },
        { nama: 'Bayam', harga: '2.500/ikat', deskripsi: 'Bayam kaya akan zat besi.', persentase: 3.0, kategori: 'down', gambar_komoditas: 'img/harga-pasar/harga-bayam.jpg' },
        { nama: 'Sawi', harga: '2.000/kg', deskripsi: 'Sawi sering digunakan dalam masakan Asia.', persentase: 1.1, kategori: 'down', gambar_komoditas: 'img/harga-pasar/harga-sawi.jpg' },
        { nama: 'Melon', harga: '8.000/kg', deskripsi: 'Melon adalah buah yang manis dan menyegarkan.', persentase: 2.7, kategori: 'up', gambar_komoditas: 'img/harga-pasar/harga-melon.jpg' },
        { nama: 'Semangka', harga: '13.500', deskripsi: 'Semangka kaya akan air dan sangat menyegarkan.', persentase: 1.9, kategori: 'up', gambar_komoditas: 'img/harga-pasar/harga-semangka.jpg' },
        { nama: 'Pisang', harga: '12.500/kg', deskripsi: 'Pisang adalah sumber energi yang baik.', persentase: 3.3, kategori: 'up', gambar_komoditas: 'img/harga-pasar/harga-pisang.jpg' },
        { nama: 'Apel', harga: '12.000/kg', deskripsi: 'Apel memiliki banyak manfaat kesehatan.', persentase: 1.6, kategori: 'down', gambar_komoditas: 'img/harga-pasar/harga-apel.jpg' },
        { nama: 'Anggur', harga: '15.000/kg', deskripsi: 'Anggur kaya akan antioksidan.', persentase: 2.4, kategori: 'down', gambar_komoditas: 'img/harga-pasar/harga-anggur.jpg' },
        { nama: 'Mangga', harga: '9.000/kg', deskripsi: 'Mangga adalah buah yang sangat populer di Indonesia.', persentase: 2.9, kategori: 'down', gambar_komoditas: 'img/harga-pasar/harga-mangga.jpg' },
    ];

    komoditases.forEach(komoditas => {
      const chartElementId = `${komoditas.nama.toLowerCase().replace(/\s+/g, '-')}-chart`;
        const chartElement = document.querySelector(`#${chartElementId}`);

        if (chartElement) {
            const chart = new ApexCharts(chartElement, {
                ...chartOptions,
                series: [{
                    data: Array.from({ length: 5 }, () => Math.floor(Math.random() * (1000000 - 10000 + 1)) + 10000)
                }]
            });
            chart.render();
        }
    });
  </script>
  <x-footer></x-footer>
</x-layout>