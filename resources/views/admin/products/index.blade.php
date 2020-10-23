<x-app-layout>
    <div class="p-2 md:p-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-3xl font-bold">Products</h1>
            <a class="h-full" href="{{ route('admin.products.create') }}">
                <x-ui.button>New Product</x-ui.button>
            </a>
        </div>

        <x-card>
            <p>Display a table of products</p>
        </x-card>

    </div>
</x-app-layout>
