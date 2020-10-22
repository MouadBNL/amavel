<div {{ $attributes->filter(fn ($value, $key) => $key == 'class') }}>
    <x-ui.label for="{{ $name }}" :label="$label" class="block"/>
    <x-ui.input :name="$name" :type="$type" {{ $attributes->whereStartsWith('wire:model') }}  class="w-full"/>
</div>