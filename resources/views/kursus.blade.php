<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <div class="flex justify-center my-5 items-center mx-auto max-w-7xl px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-4xl font-bold tracking-tight text-green-700 sm:text-6xl">Kursus Pertanian</h2>
                    <p class="mt-6 text-lg leading-8 text-dark">Kursus pertanian modern paling kece di Indonesia</p>
                </div>
            </div>
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @foreach ($kursuses as $kursus)
                <article class="px-3 py-3 flex max-w-xl flex-col items-start justify-between rounded-lg border-solid border-2 border-gray-100 shadow-md">
                    <img src="{{ asset($kursus->gambar_kursus) }}" alt="{{ $kursus->judul }}" class="w-full h-48 object-cover mb-4 rounded-lg">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2023-05-25" class="text-gray-500">{{ $kursus->created_at->diffForHumans() }}</time>
                        <p class="relative z-10 rounded-full bg-gray-300 px-3 py-1.5 font-medium text-black">{{ $kursus->kategori }}</p>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                            <a href="kursus/{{ $kursus->slug }}">
                                <span class="absolute inset-0"></span>
                                {{ $kursus->judul }}
                            </a>
                        </h3>
                        <div class="relative mt-3 flex items-center gap-x-4">
                            <img src="{{ $kursus->gambar_penulis }}" alt="{{ $kursus->penulis }}" class="h-10 w-10 rounded-full bg-gray-50">
                            <div class="text-sm leading-6">
                                <p class="font-semibold text-gray-900">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        {{ $kursus->penulis }}
                                    </a>
                                </p>
                                <p class="text-gray-600">{{ $kursus->profesi_penulis }}</p>
                            </div>
                        </div>
                        <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{ Str::limit($kursus->deskripsi, 100) }}</p>
                    </div>
                    
                </article>
                @endforeach
            </div>
        </div>
    <x-footer></x-footer>

    @if (session('status'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Sukses',
                        text: '{{ session('status') }}',
                        confirmButtonText: 'OK'
                    });
                });
            </script>
        
        @endif
</x-layout>
