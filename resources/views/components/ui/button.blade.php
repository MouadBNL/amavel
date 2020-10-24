<button {{ $attributes->merge(['type' => 'button', 'class' => "px-4 py-1 rounded shadow transition duration-200"]) }}>
    {{ $value ?? $slot }}
</button>