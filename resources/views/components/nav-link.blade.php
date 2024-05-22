@props(['active' => false])

<a class="{{ $active ? 'bg-green-800 text-yellow-300' : 'text-white hover:bg-green-800 hover:text-white'}} rounded-md px-3 py-2 text-sm font-bold transition-colors" aria-current="{{ $active ? 'page' : false }}" {{ $attributes }}>{{ $slot }}</a>