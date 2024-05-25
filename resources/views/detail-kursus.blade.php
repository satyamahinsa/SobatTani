<x-layout>
<x-slot:title>{{ $title }}</x-slot:title>
<div>
<div class="container mx-auto py-12">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-lg">
        <!-- Breadcrumb Navigation -->
        <nav class="mb-6" aria-label="Breadcrumb">
            <ol class="list-none p-0 inline-flex">
                <li class="flex items-center">
                    <a href="{{ route('dashboard') }}" class="text-blue-600 hover:text-blue-800">Kursus</a>
                    <svg class="fill-current w-3 h-3 mx-3" viewBox="0 0 24 24">
                        <path d="M9 18l6-6-6-6" />
                    </svg>
                </li>
                <li>
                    <span class="text-gray-500">{{ $title }}</span>
                </li>
            </ol>
        </nav>

        <!-- Course Title -->
        <h1 class="text-3xl font-bold mb-4">{{ $title }}</h1>

        <div class="w-full h-64 mb-6">
            <iframe class="w-full h-full rounded-lg" src="https://www.youtube.com/embed/tglE4byjdd0" title="{{ $title }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <!-- Course Details -->
        <div class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Deskripsi Kursus</h2>
            <p class="text-gray-700 leading-relaxed">Revitalisasi minat generasi muda terhadap pertanian dapat membawa inovasi dan keberlanjutan dalam sektor yang vital ini. Aplikasi "SobatTani" hadir untuk memfasilitasi petani muda dengan akses ke pendidikan, pasar, dan komunitas.</p>
        </div>

        <div class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Detail Kursus</h2>
            <ul class="list-disc list-inside text-gray-700">
                <li><strong>Instruktur:</strong> Andi Setiawan</li>
                <li><strong>Durasi:</strong> 10 jam</li>
                <li><strong>Kategori:</strong> Pertanian</li>
                <li><strong>Tanggal Mulai:</strong> May 25, 2023</li>
            </ul>
        </div>

    </div>
</div>
</div>
    <x-footer></x-footer>
</x-layout> 