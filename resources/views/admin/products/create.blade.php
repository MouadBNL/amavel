<x-app-layout>
    <div class="p-2 md:p-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-3xl font-bold">New Products</h1>
        </div>

        <x-card>
            <form action="{{ route('admin.products.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <x-ui.form.input class="my-4" label="Product name" name="name" type="text"/>
                <div class="my-4">
                    <x-ui.label class="block" for="featured_image">Featured image</x-ui.label>
                    @error('featured_image')
                        <p class="text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    <input type="file" name="featured_image">
                </div>
                <x-ui.form.textarea class="my-4" class="w-full" resize="resize-y" label="Product Description" name="description"/>
                <div class="flex">
                    <x-ui.form.input class="my-4 pr-4 w-1/2" label="Product Price" name="price" type="number"/>
                    <x-ui.form.input class="my-4 pl-4 w-1/2" label="Product Quantity" name="quantity" type="text"/>
                </div>
                <x-ui.button type="submit" value="Create"/>
            </form>
        </x-card>

    </div>
</x-app-layout>
