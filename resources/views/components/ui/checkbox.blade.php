<input type="checkbox" {{ $attributes->merge(['class' => "form-checkbox h-5 w-5 text-blue-600"]) }}><span class="ml-2 text-gray-700">{{ $value ?? $slot }}</span>