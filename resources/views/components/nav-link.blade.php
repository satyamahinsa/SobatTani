@props(['active' => false])

<a class="{{ $active ? 'bg-green-800 text-yellow-400' : 'text-white hover:bg-green-800'}} block rounded-md px-3 py-2 text-sm font-medium" aria-current="{{ $active ? 'page' : false }}" {{ $attributes }}>{{ $slot }}</a>