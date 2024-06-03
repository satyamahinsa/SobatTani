<x-layout>
    <x-slot:title>{{ $kursus->judul }}</x-slot:title>
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <div class="container">
            <!-- Breadcrumb Navigation -->
            <nav class="mb-6" aria-label="Breadcrumb">
                <ol class="list-none p-0 inline-flex">
                    <li class="flex items-center">
                        <a href="/kursus" class="text-green-600 hover:text-green-800 hover:underline">Kursus</a>
                        <svg class="fill-current w-3 h-3 mx-3" viewBox="0 0 24 24">
                            <path d="M9 18l6-6-6-6" />
                        </svg>
                    </li>
                    <li>
                        <span class="text-gray-500">{{ $kursus->judul }}</span>
                    </li>
                </ol>
            </nav>

            <!-- Course Title -->
            <h1 class="text-3xl font-bold mb-4">{{ $kursus->judul }}</h1>

            <div class="w-full h-96 mb-6">
                <iframe class="w-full h-full rounded-lg" src="{{ $kursus->link_video }}" title="{{ $kursus->judul }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <!-- Course Details -->
            <div class="mb-6">
                <h2 class="text-2xl font-semibold mb-2">Deskripsi Kursus</h2>
                <p class="text-gray-700 text-justify leading-relaxed">{{ $kursus->deskripsi }}</p>
            </div>

            <div class="mt-6">
                <h2 class="text-2xl font-semibold mb-2">Detail Kursus</h2>
                <ul class="list-disc list-inside text-gray-700">
                    <li><strong>Penulis: </strong>{{ $kursus->penulis }}</li>
                    <li><strong>Profesi: </strong>{{ $kursus->profesi_penulis }}</li>
                    <li><strong>Tanggal Mulai: </strong>{{ $kursus->created_at->diffForHumans() }}</li>
                </ul>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</x-layout> 