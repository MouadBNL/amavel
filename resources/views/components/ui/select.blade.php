<select {{ $multiple ?? '' }} {{ $attributes->merge(['class' => "px-4 py-1 border rounded shadow bg-white " . ($class ?? '') ]) }}>
    {{ $slot }}
</select>