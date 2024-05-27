<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <div class="bg-white py-16 sm:py-24">
    <div class="max-w-6xl mx-auto">
      <ul role="list" class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-8">
        <li class="block py-5 hover:bg-gray-50 transition duration-200">
          <div class="flex min-w-0 gap-x-4">
        <img class="h-12 w-12 flex-none rounded-full bg-gray-50 hover:scale-110 transition-transform duration-200" src="{{asset('img/harga-padi.jpg')}}" alt="Padi">
        <div class="min-w-0 flex-auto">
          <p class="text-sm font-semibold leading-6 text-gray-900">Padi</p>
          <p class="mt-1 text-xs leading-5 text-gray-500">Padi adalah tanaman pangan yang tumbuh subur di daerah beriklim tropis seperti Indonesia. Tanaman ini merupakan komoditas utama yang menjadi bahan baku untuk beras, makanan pokok bagi sebagian besar penduduk di Indonesia dan di banyak negara Asia lainnya.</p>
        </div>
      </div>
      <div class="shrink-0 sm:flex sm:flex-col sm:ml-16">
        <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
          <div class="flex justify-between">
            <div>
              <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">Rp. 15.000/kg</h5>
              <p class="text-base font-normal text-gray-500 dark:text-gray-400">Harga Padi</p>
            </div>
            <div class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
              2%
              <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
              </svg>
            </div>
          </div>
          <div id="padiChart"></div>
        </div>
      </div>
    </li>
    <li class="block justify-between gap-x-6 py-5 hover:bg-gray-50 transition duration-200">
      <div class="flex min-w-0 gap-x-4">
        <img class="h-12 w-12 flex-none rounded-full bg-gray-50 hover:scale-110 transition-transform duration-200" src="{{asset('img/harga-kopi.jpg')}}" alt="Kopi">
        <div class="min-w-0 flex-auto">
          <p class="text-sm font-semibold leading-6 text-gray-900">Kopi</p>
          <p class="mt-1 text-xs leading-5 text-gray-500">Kopi Indonesia terkenal di seluruh dunia dengan berbagai jenis dan rasa. Dengan ragam biji kopi yang tumbuh di berbagai daerah, mulai dari Aceh hingga Papua, Indonesia menawarkan beragam cita rasa kopi yang unik dan khas.</p>
        </div>
      </div>
      <div class="shrink-0 sm:flex sm:flex-col sm:ml-16">
        <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
          <div class="flex justify-between">
            <div>
              <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">Rp. 99.000/kg</h5>
              <p class="text-base font-normal text-gray-500 dark:text-gray-400">Harga Kopi</p>
            </div>
            <div class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
              3%
              <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
              </svg>
            </div>
          </div>
          <div id="kopiChart"></div>
        </div>
      </div>
    </li>
    <li class="block justify-between gap-x-6 py-5 hover:bg-gray-50 transition duration-200">
      <div class="flex min-w-0 gap-x-4">
        <img class="h-12 w-12 flex-none rounded-full bg-gray-50 hover:scale-110 transition-transform duration-200" src="{{asset('img/harga-kelapasawit.jpg')}}" alt="Kelapa Sawit">
        <div class="min-w-0 flex-auto">
          <p class="text-sm font-semibold leading-6 text-gray-900">Kelapa Sawit</p>
          <p class="mt-1 text-xs leading-5 text-gray-500">Kelapa sawit digunakan untuk produksi minyak kelapa sawit yang menjadi ekspor utama. Minyak kelapa sawit adalah salah satu komoditas ekspor utama bagi banyak negara, terutama di Asia Tenggara.</p>
        </div>
      </div>
      <div class="shrink-0 sm:flex sm:flex-col sm:ml-16">
        <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
          <div class="flex justify-between">
            <div>
              <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">Rp. 9.000/kg</h5>
              <p class="text-base font-normal text-gray-500 dark:text-gray-400">Harga Kelapa Sawit</p>
            </div>
            <div class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
              1%
              <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
              </svg>
            </div>
          </div>
          <div id="kelapaSawitChart"></div>
        </div>
      </div>
    </li>
    <li class="block justify-between gap-x-6 py-5 hover:bg-gray-50 transition duration-200">
      <div class="flex min-w-0 gap-x-4">
        <img class="h-12 w-12 flex-none rounded-full bg-gray-50 hover:scale-110 transition-transform duration-200" src="{{asset('img/harga-kakao.jpg')}}" alt="Kakao">
        <div class="min-w-0 flex-auto">
          <p class="text-sm font-semibold leading-6 text-gray-900">Kakao</p>
          <p class="mt-1 text-xs leading-5 text-gray-500">Kakao adalah bahan baku utama untuk pembuatan cokelat. Kakao Terletak di kawasan-kawasan tropis seperti Amerika Selatan, Afrika Barat, dan Asia Tenggara. Biji coklat yang dihasilkan dari pohon ini mengandung rasa pahit yang khas.</p>
        </div>
      </div>
      <div class="shrink-0 sm:flex sm:flex-col sm:ml-16">
        <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
          <div class="flex justify-between">
            <div>
              <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">Rp. 30.000/kg</h5>
              <p class="text-base font-normal text-gray-500 dark:text-gray-400">Harga Kakao</p>
            </div>
            <div class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
              4%
              <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
              </svg>
            </div>
          </div>
          <div id="kakaoChart"></div>
        </div>
      </div>
    </li>
    <li class="block justify-between gap-x-6 py-5 hover:bg-gray-50 transition duration-200">
      <div class="flex min-w-0 gap-x-4">
        <img class="h-12 w-12 flex-none rounded-full bg-gray-50 hover:scale-110 transition-transform duration-200" src="{{asset('img/harga-teh.jpg')}}" alt="Teh">
        <div class="min-w-0 flex-auto">
          <p class="text-sm font-semibold leading-6 text-gray-900">Teh</p>
          <p class="mt-1 text-xs leading-5 text-gray-500">Teh dari Indonesia memiliki beragam jenis dan varian yang menciptakan pengalaman minum yang unik bagi para penikmatnya. Dari teh hitam yang kuat dan kaya rasa hingga teh hijau yang segar dan menyegarkan.</p>
        </div>
      </div>
      <div class="shrink-0 sm:flex sm:flex-col sm:ml-16">
        <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
          <div class="flex justify-between">
            <div>
              <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">Rp. 38.000/kg</h5>
              <p class="text-base font-normal text-gray-500 dark:text-gray-400">Harga Teh</p>
            </div>
            <div class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
              1.5%
              <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
              </svg>
            </div>
          </div>
          <div id="tehChart"></div>
        </div>
      </div>
    </li>
    <li class="block justify-between gap-x-6 py-5 hover:bg-gray-50 transition duration-200">
      <div class="flex min-w-0 gap-x-4">
        <img class="h-12 w-12 flex-none rounded-full bg-gray-50 hover:scale-110 transition-transform duration-200" src="{{asset('img/harga-karet.jpeg')}}" alt="Karet">
        <div class="min-w-0 flex-auto">
          <p class="text-sm font-semibold leading-6 text-gray-900">Karet</p>
          <p class="mt-1 text-xs leading-5 text-gray-500">Karet adalah bahan baku utama untuk berbagai produk seperti ban dan sepatu. Karet, yang sering kali diperoleh dari getah pohon karet, adalah bahan yang elastis dan tahan terhadap air yang telah menjadi kunci dalam berbagai industri.</p>
        </div>
      </div>
      <div class="shrink-0 sm:flex sm:flex-col sm:ml-16">
        <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
          <div class="flex justify-between">
            <div>
              <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">Rp. 13.000/kg</h5>
              <p class="text-base font-normal text-gray-500 dark:text-gray-400">Harga Karet</p>
            </div>
            <div class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
              2.5%
              <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
              </svg>
            </div>
          </div>
          <div id="karetChart"></div>
        </div>
      </div>
    </li>
  </ul>
</div>
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

    const padiChart = new ApexCharts(document.querySelector("#padiChart"), {
      ...chartOptions,
      series: [{
        data: [9000, 10000, 13000, 12000, 15000]
      }]
    });
    padiChart.render();

    const kopiChart = new ApexCharts(document.querySelector("#kopiChart"), {
      ...chartOptions,
      series: [{
        data: [88000, 69000, 48000, 71000, 99000]
      }]
    });
    kopiChart.render();

    const kelapaSawitChart = new ApexCharts(document.querySelector("#kelapaSawitChart"), {
      ...chartOptions,
      series: [{
        data: [4800, 3900, 7000, 6100, 9000]
      }]
    });
    kelapaSawitChart.render();

    const kakaoChart = new ApexCharts(document.querySelector("#kakaoChart"), {
      ...chartOptions,
      series: [{
        data: [28000, 29000, 30000, 31000, 30000]
      }]
    });
    kakaoChart.render();

    const tehChart = new ApexCharts(document.querySelector("#tehChart"), {
      ...chartOptions,
      series: [{
        data: [20000, 27000, 23000, 25000, 38000]
      }]
    });
    tehChart.render();

    const karetChart = new ApexCharts(document.querySelector("#karetChart"), {
      ...chartOptions,
      series: [{
        data: [14000, 10000, 8000, 12000, 13000]
      }]
    });
    karetChart.render();
  </script>

  <style>
    .chart-container {
      max-width: 400px;
      width: 300%;
      margin: 0 auto;
    }
  </style>
  <x-footer></x-footer>
</x-layout>