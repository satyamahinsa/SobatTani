@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'px-2 py-1 bg-white text-black rounded-lg border-solid border-2 border-gray-400']) !!}>
