<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <div class="flex justify-center my-5 items-center mx-auto max-w-7xl px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-4xl font-bold tracking-tight text-green-700 sm:text-6xl">Jual Beli Komoditas</h2>
                <p class="mt-6 text-lg leading-8 text-dark">Jual Beli dari berbagai komoditas pertanian di Indonesia</p>
            </div>
        </div>
        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            @foreach($barangs as $barang)
            <div class="group relative rounded-lg border-solid border-2 border-gray-100 shadow-md p-3">
                <div id="product-image-{{ $barang->id }}" class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 cursor-pointer" data-id="{{ $barang->id }}">
                    <img src="{{ $barang->gambar_produk }}" alt="{{ $barang->nama }}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">{{ $barang->nama }}</h3>
                        <p class="mt-1 text-sm text-gray-500">{{ $barang->nama }}</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">Rp {{ $barang->harga }}</p>
                </div>
                <div class="mt-2 flex items-center">
                    @php
                        $rating = round($barang->penilaian);
                    @endphp
                    @for ($i = 0; $i < 5; $i++)
                        @if ($i < $rating)
                            <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                            </svg>
                        @else
                            <svg class="text-gray-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                            </svg>
                        @endif
                    @endfor
                    <p class="ml-2 text-sm text-gray-500">{{ $barang->penilaian }} dari 5</p>
                </div>
            </div>
            @endforeach
        </div>
        <div id="product-modal" class="fixed inset-0 hidden z-10 overflow-y-auto">
            <div class="relative z-10" role="dialog" aria-modal="true">
                <div class="fixed inset-0 hidden bg-gray-500 bg-opacity-75 transition-opacity md:block"></div>
                <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                    <div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">
                        <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
                            <div class="relative flex w-full items-center overflow-hidden bg-white px-4 pb-8 pt-14 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
                                <button type="button" id="close-modal" class="absolute right-4 top-4 text-gray-400 hover:text-gray-500 sm:right-6 sm:top-8 md:right-6 md:top-6 lg:right-8 lg:top-8">
                                    <span class="sr-only">Close</span>
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>

                                <div class="grid w-full grid-cols-1 items-start gap-x-6 gap-y-8 sm:grid-cols-12 lg:gap-x-8">
                                    <div id="modal-product-image" class="aspect-h-3 aspect-w-2 overflow-hidden rounded-lg bg-gray-100 sm:col-span-4 lg:col-span-5">
                                        <img src="" alt="" class="object-cover object-center w-full h-full">
                                    </div>
                                    <div class="sm:col-span-8 lg:col-span-7">
                                        <h2 id="modal-product-name" class="text-2xl font-bold text-gray-900 sm:pr-12"></h2>
                                        <p id="modal-product-price" class="text-2xl text-gray-900 mt-2"></p>
                                        <p id="modal-product-description" class="mt-4"></p>
                                        <button type="submit" class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Contact us</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const productImages = document.querySelectorAll('[id^="product-image-"]');
            const productModal = document.getElementById('product-modal');
            const closeModalButton = document.getElementById('close-modal');
            
            productImages.forEach(image => {
                image.addEventListener('click', function() {
                    const productId = this.getAttribute('data-id');
                    const product = @json($barangs).find(barang => barang.id == productId);

                    document.getElementById('modal-product-image').querySelector('img').src = product.gambar_produk;
                    document.getElementById('modal-product-name').textContent = product.nama;
                    document.getElementById('modal-product-price').textContent = 'Rp ' + product.harga;
                    document.getElementById('modal-product-description').textContent = product.deskripsi;

                    productModal.classList.remove('hidden');
                });
            });

            closeModalButton.addEventListener('click', function() {
                productModal.classList.add('hidden');
            });

            window.addEventListener('click', function(event) {
                if (event.target == productModal) {
                    productModal.classList.add('hidden');
                }
            });
        });
    </script>

    <x-footer></x-footer>
</x-layout>
