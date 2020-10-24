<div {{ $attributes->filter(fn ($value, $key) => $key == 'class') }}>
    <x-ui.label for="{{ $name }}" :label="$label" class="block"/>
    @error($name)
        <p class="text-sm text-red-600">{{ $message }}</p>
    @enderror
    <x-ui.input :name="$name" :type="$type" {{ $attributes->whereStartsWith('wire:model') }}  class="w-full"/>
</div>