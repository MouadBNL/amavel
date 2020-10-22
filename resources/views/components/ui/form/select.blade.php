<div {{ $attributes->filter(fn ($value, $key) => $key == 'class') }}>
    <x-ui.label for="{{ $name }}" :label="$label" class="block"/>
    <x-ui.select :name="$name" {{ $attributes->whereStartsWith('wire:model') }} class="w-full">
        {{ $slot }}
    </x-ui.select>
</div>