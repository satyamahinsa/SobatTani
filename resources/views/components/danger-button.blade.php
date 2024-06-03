<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-800']) }}>
    {{ $slot }}
</button>
