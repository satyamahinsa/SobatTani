<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel=icon type=x-icon href=../img/navbar/main-logo.png>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $title }} | Sobat Tani</title>
</head>
<body>
    <div class="bg-white">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Sobat Tani</span>
                        <img class="h-20 w-auto" src="{{ asset('img/navbar/main-logo.png') }}" alt="Sobat Tani">
                    </a>
                </div>
                @if (Route::has('login'))
                <div class="flex lg:flex-1 lg:justify-end space-x-4">
                    @auth
                    <a href="/kursus" class="rounded-md border-2 border-green-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-600 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-300">
                        Masuk
                    </a>
                @else
                    <a href="{{ route('login') }}" class="rounded-md border-2 border-green-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-600 hover:text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-300">
                        Masuk
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="rounded-md bg-green-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Daftar
                        </a>
                    @endif
                    @endauth
                @endif
                </div>
            </nav>
        </header>
    
        <div class="relative isolate min-h-screen flex items-center justify-center pt-10 px-6 lg:px-8" style="background-image: url({{ asset('img/hero-petani.jpg') }}); background-size: cover; background-position: center;">
            <div class="absolute inset-0 bg-black opacity-50 blur-sm"></div>
            <div class="relative mx-auto max-w-2xl text-center">
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Revitalisasi Pertanian dengan Teknologi</h1>
                <p class="mt-6 text-lg leading-8 text-gray-300">Indonesia sebagai negara agraris memiliki potensi besar dalam sektor pertanian. "SobatTani" hadir untuk menginspirasi dan memfasilitasi generasi muda agar terlibat dalam pertanian modern yang berkelanjutan dan menguntungkan.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="/register" class="rounded-md bg-green-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Mulai Sekarang</a>
                </div>
            </div>
        </div>        
    </div>
    
    <div class="relative isolate overflow-hidden bg-white py-24 sm:py-32">
        <div class="flex justify-center items-center mx-auto max-w-7xl px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-4xl font-bold tracking-tight text-green-700 sm:text-6xl">Sobat Tani</h2>
                <p class="mt-6 text-lg leading-8 text-dark">Indonesia sebagai negara agraris memiliki keanekaragaman hayati dan sumber daya alam yang melimpah. Pertanian di Indonesia berperan penting dalam struktur perekonomian nasional dan pembangunan sosial budaya. Sektor pertanian, termasuk kehutanan dan perikanan, memiliki kontribusi signifikan terhadap PDB Indonesia. Namun, minat generasi muda dalam sektor ini menurun, menyebabkan tantangan besar bagi keberlanjutan sektor pertanian. "SobatTani" hadir sebagai solusi dengan mengintegrasikan teknologi untuk memfasilitasi petani dan generasi muda dalam menjalankan aktivitas pertanian modern, mengakses pendidikan, pasar, dan komunitas pertanian. </p>
            </div>
        </div>
        <div class="flex justify-center items-center mx-auto mt-10 max-w-7xl lg:max-w-none px-6 lg:px-8">
            <div class="text-center">
                <div class="flex justify-center items-center grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-dark sm:grid-cols-2 md:flex lg:gap-x-10">
                    @auth
                        <a href="/kursus" class="font-bold text-green-700 hover:underline">Kursus <span aria-hidden="true">&rarr;</span></a>
                        <a href="/jual-beli" class="font-bold text-green-700 hover:underline">Jual Beli <span aria-hidden="true">&rarr;</span></a>
                        <a href="/harga-pasar" class="font-bold text-green-700 hover:underline">Harga Pasar <span aria-hidden="true">&rarr;</span></a>
                        <a href="/titik-kesuburan-tanah" class="font-bold text-green-700 hover:underline">Titik Kesuburan Tanah <span aria-hidden="true">&rarr;</span></a>
                    @else
                        <a href="{{ route('login') }}" class="font-bold text-green-700 hover:underline">Kursus <span aria-hidden="true">&rarr;</span></a>
                        <a href="{{ route('login') }}" class="font-bold text-green-700 hover:underline">Jual Beli <span aria-hidden="true">&rarr;</span></a>
                        <a href="{{ route('login') }}" class="font-bold text-green-700 hover:underline">Harga Pasar <span aria-hidden="true">&rarr;</span></a>
                        <a href="{{ route('login') }}" class="font-bold text-green-700 hover:underline">Titik Kesuburan Tanah <span aria-hidden="true">&rarr;</span></a>
                    @endauth
                </div>
                <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="flex flex-col-reverse">
                        <dt class="text-base leading-7 text-green-700">Jumlah Petani</dt>
                        <dd class="text-2xl font-bold leading-9 tracking-tight text-green-700">29,3 juta</dd>
                    </div>
                    <div class="flex flex-col-reverse">
                        <dt class="text-base leading-7 text-green-700">Kontribusi terhadap PDB</dt>
                        <dd class="text-2xl font-bold leading-9 tracking-tight text-green-700">13,22%</dd>
                    </div>
                    <div class="flex flex-col-reverse">
                        <dt class="text-base leading-7 text-green-700">Usia Petani</dt>
                        <dd class="text-2xl font-bold leading-9 tracking-tight text-green-700">18-44 tahun</dd>
                    </div>
                    <div class="flex flex-col-reverse">
                        <dt class="text-base leading-7 text-green-700">Potensi Digitalisasi</dt>
                        <dd class="text-2xl font-bold leading-9 tracking-tight text-green-700">Sangat Tinggi</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
    
    <div class="bg-green-700 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-base font-semibold leading-7 text-yellow-300">Revolusi Pertanian</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Mengubah Cara Generasi Muda Melihat Pertanian</p>
                <p class="mt-6 text-lg leading-8 text-white">Pertanian di Indonesia bukan hanya sektor ekonomi, tetapi juga fondasi keberlanjutan nasional. Namun, minat generasi muda terhadap pertanian menurun drastis, mengancam ketahanan pangan dan stabilitas ekonomi.</p>
            </div>
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-white">
                                <i class="fa-solid fa-microchip text-xl text-green-800"></i>
                            </div>
                            <p class="text-xl font-bold text-yellow-300">Teknologi Modern</p>
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-white">Memanfaatkan inovasi teknologi untuk meningkatkan efisiensi dan produktivitas pertanian, serta memikat generasi muda untuk terlibat aktif.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-white">
                                <i class="fa-solid fa-book text-xl text-green-800"></i>
                            </div>
                            <p class="text-xl font-bold text-yellow-300">Edukasi dan Pelatihan</p>
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-white">Memberikan akses mudah ke informasi, pendidikan, dan pelatihan tentang praktik pertanian modern kepada generasi muda dan petani.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-white">
                                <i class="fa-solid fa-store text-xl text-green-800"></i>
                                </svg>
                            </div>
                            <p class="text-xl font-bold text-yellow-300">Pasar dan Komunitas</p>
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-white">Membantu membangun pasar yang berkelanjutan dan komunitas yang mendukung pertanian lokal, menghubungkan produsen dengan konsumen secara langsung.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base font-semibold leading-7 text-white">
                            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-white">
                                <i class="fa-solid fa-lock text-xl text-green-800"></i>
                            </div>
                            <p class="text-xl font-bold text-yellow-300">Keamanan dan Kualitas</p>
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-white">Menyediakan keamanan yang lebih baik bagi pertanian melalui integrasi teknologi canggih untuk melindungi hasil panen dan sumber daya alam.</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="w-full text-center">
                <h2 class="text-3xl font-bold tracking-tight text-green-700 sm:text-4xl">Tim Pengembang</h2>
                <p class="mt-6 text-lg leading-8 text-gray-600">Sekumpulan Orang yang Kreatif</p>
            </div>
            <div class="flex flex-wrap justify-center gap-8 mt-12">
                <div class="flex flex-col items-center w-1/3 max-w-xs">
                    <img class="h-40 w-40 rounded-md" src="{{asset('img/foto-pengembang/DaffaAthayaKhairilRiza.jpg')}}" alt="Daffa Athaya Khairil Riza">
                    <h3 class="text-base text-center font-semibold leading-7 tracking-tight text-gray-900">Daffa Athaya Khairil Riza</h3>
                    <p class="text-sm text-center font-semibold leading-6 text-green-700">View Kursus & Detail Kursus </p>
                </div>
                <div class="flex flex-col items-center w-1/3 max-w-xs">
                    <img class="h-40 w-40 rounded-md" src="img/foto-pengembang/Dharma.jpg" alt="Dharma Wiguna Limmarga">
                    <h3 class="text-base text-center font-semibold leading-7 tracking-tight text-gray-900">Dharma Wiguna Limmarga</h3>
                    <p class="text-sm text-center font-semibold leading-6 text-green-700">Membuat View Jual-Beli</p>
                </div>
                <div class="flex flex-col items-center w-1/3 max-w-xs">
                    <img class="h-40 w-40 rounded-md" src="{{asset('img/foto-pengembang/MuhAzzamIzzadin.jpg')}}" alt="Muh Azzam Izzadin">
                    <h3 class="text-base text-center font-semibold leading-7 tracking-tight text-gray-900">Muh Azzam Izzadin</h3>
                    <p class="text-sm text-center font-semibold leading-6 text-green-700">Authentication Web & View Titik Kesuburan  </p>
                </div>
                <div class="flex flex-col items-center w-1/3 max-w-xs">
                    <img class="h-40 w-40 rounded-md" src="{{ asset('img/foto-pengembang/GedeSatyamahinsa.jpg') }}" alt="Gede Satyamahinsa Prastita Uttama">
                    <h3 class="text-base text-center font-semibold leading-7 tracking-tight text-gray-900">Gede Satyamahinsa Prastita Uttama</h3>
                    <p class="text-sm text-center font-semibold leading-6 text-green-700">Database Schema & View Home</p>
                </div>
                <div class="flex flex-col items-center w-1/3 max-w-xs">
                    <img class="h-75 w-75 rounded-md" src="https://randomuser.me/api/portraits/men/5.jpg" alt="Muhammad Alifian Putra Wibowo">
                    <h3 class="text-base text-center font-semibold leading-7 tracking-tight text-gray-900">Muhammad Alifian Putra Wibowo</h3>
                    <p class="text-sm text-center font-semibold leading-6 text-green-700">Jobdesk</p>
                </div>
            </div>
        </div>
    </div>

    <x-footer></x-footer>
</body>
</html>