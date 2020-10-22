<button {{ $attributes->merge(['type' => 'button', 'class' => "px-4 py-1 rounded shadow bg-blue-500 text-white hover:bg-blue-600 transition duration-200"]) }}>
    {{ $value ?? $slot }}
</button>