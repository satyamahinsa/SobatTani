<nav class="fixed w-full top-0 left-0 z-50 bg-green-700 border-b-2 border-white" x-data="{ isOpen: false }" >
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <a href="/">
                        <img class="h-8 w-8" src="{{ asset("img/navbar/main-logo.png") }}" alt="Your Company">
                    </a>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        {{-- <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link> --}}
                        <x-nav-link href="/kursus" :active="request()->is('kursus*')">Kursus</x-nav-link>
                        <x-nav-link href="/toko" :active="request()->is('toko')">Toko</x-nav-link>
                        <x-nav-link href="/harga-pasar" :active="request()->is('harga-pasar')">Harga Pasar</x-nav-link>
                        <x-nav-link href="/titik-kesuburan-tanah" :active="request()->is('titik-kesuburan-tanah')">Titik Kesuburan Tanah</x-nav-link>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                    <div class="text-white font-bold">{{ Auth::user()->name }}</div>
                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
                            <button type="button" @click="isOpen = !isOpen" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="{{ asset("img/navbar/default-profile.png") }}" alt="{{ Auth::user()->name }}">
                            </button>
                        </div>

                        <div x-show="isOpen"
                        x-transition:enter="transition ease-out duration-100 transform"
                        x-transition:enter-start="opacity-0 scale-95"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75 transform"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-black hover:bg-yellow-300 rounded-t-md" role="menuitem" tabindex="-1" id="user-menu-item-0">Profil anda</a>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="/logout" class="block px-4 py-2 text-sm text-black hover:bg-yellow-300 rounded-b-md" role="menuitem" tabindex="-1" id="user-menu-item-2" onclick="event.preventDefault();
                                this.closest('form').submit();">Sign out</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-green-900 p-2 text-yellow-400 hover:bg-green-800 hover:text-yellow-200 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg :class="{'hidden': !isOpen, 'block': isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-1 pb-3 pt-2 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <x-nav-link href="/kursus" :active="request()->is('kursus*')">Kursus</x-nav-link>
            <x-nav-link href="/toko" :active="request()->is('toko')" class="block w-full text-left">Toko</x-nav-link>
            <x-nav-link href="/harga-pasar" :active="request()->is('harga-pasar')" class="block w-full text-left">Harga Pasar</x-nav-link>
            <x-nav-link href="/titik-kesuburan-tanah" :active="request()->is('titik-kesuburan-tanah')" class="block w-full text-left">Titik Kesuburan Tanah</x-nav-link>
        </div>
        <div class="border-t border-gray-700 pb-3 pt-4">
            <div class="flex items-center px-5">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="{{ asset("img/navbar/default-profile.png") }}" alt="{{ Auth::user()->name }}">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium leading-none text-white">{{ Auth::user()->name }}</div>
                    <div class="text-sm font-medium leading-none text-gray-400">{{ Auth::user()->email }}</div>
                </div>
            </div>
            <div class="mt-3 space-y-1 px-2">
                <a href="{{ route('profile.edit') }}" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-green-800">Profile anda</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="/logout" class="block rounded-md px-3 py-2 text-base font-medium text-white hover:bg-green-800" onclick="event.preventDefault();
                    this.closest('form').submit();">Sign out</a>
                </form>
            </div>
        </div>
    </div>
</nav>