<nav class="fixed w-full top-0 left-0 z-50 bg-green-700 border-b-2 border-white" x-data="{ open: false }">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('profile.edit') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden md:flex ml-10 items-baseline space-x-4">
                    <x-nav-link href="/kursus" :active="request()->is('kursus*')" class="text-white hover:bg-green-800">Kursus</x-nav-link>
                    <x-nav-link href="/jual-beli" :active="request()->is('jual-beli')" class="text-white hover:bg-green-800">Jual Beli</x-nav-link>
                    <x-nav-link href="/harga-pasar" :active="request()->is('harga-pasar')" class="text-white hover:bg-green-800">Harga Pasar</x-nav-link>
                    <x-nav-link href="/titik-kesuburan-tanah" :active="request()->is('titik-kesuburan-tanah')" class="text-white hover:bg-green-800">Titik Kesuburan Tanah</x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden md:flex items-center ml-6">
                <div class="text-white font-bold">{{ Auth::user()->name }}</div>
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="ml-3 flex items-center text-sm rounded-full bg-gray-800 text-white focus:outline-none">
                            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')" class="text-black hover:bg-yellow-300">Profil anda</x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" class="text-black hover:bg-yellow-300" onclick="event.preventDefault(); this.closest('form').submit();">Sign out</x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center md:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-yellow-400 bg-green-900 hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                    <svg :class="{'hidden': open, 'block': ! open }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg :class="{'hidden': ! open, 'block': open }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="md:hidden">
        <div class="space-y-1 px-1 pb-3 pt-2 sm:px-3">
            <x-nav-link href="/kursus" :active="request()->is('kursus*')" class="block w-full text-left text-white hover:bg-green-800">Kursus</x-nav-link>
            <x-nav-link href="/jual-beli" :active="request()->is('jual-beli')" class="block w-full text-left text-white hover:bg-green-800">Jual Beli</x-nav-link>
            <x-nav-link href="/harga-pasar" :active="request()->is('harga-pasar')" class="block w-full text-left text-white hover:bg-green-800">Harga Pasar</x-nav-link>
            <x-nav-link href="/titik-kesuburan-tanah" :active="request()->is('titik-kesuburan-tanah')" class="block w-full text-left text-white hover:bg-green-800">Titik Kesuburan Tanah</x-nav-link>
        </div>
        
        <div class="border-t border-gray-700 pb-3 pt-4">
            <div class="flex items-center px-5">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium leading-none text-white">{{ Auth::user()->name }}</div>
                    <div class="text-sm font-medium leading-none text-gray-400">{{ Auth::user()->email }}</div>
                </div>
            </div>
            <div class="mt-3 space-y-1 px-2">
                <a href="{{ route('profile.edit') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white" onclick="event.preventDefault(); this.closest('form').submit();">Sign out</a>
                </form>
            </div>
        </div>
    </div>
</nav>
