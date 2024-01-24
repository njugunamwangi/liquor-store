    <div>
        <div class="">
            <div class=" h-72 w-full overflow-hidden rounded-lg">
                <img
                    src="{{ url('/storage/'.$product->productImage->path) }}"
                    alt="{{ $product->product }}"
                    class="h-full w-full object-cover object-center">
            </div>
            <div class="mt-4">
                <h3 class="text-sm font-medium text-gray-900">{{ $product->product }}</h3>
                <p class="mt-1 text-sm text-gray-500">{{ $product->brand->brand }} | {{ $product->flavor->flavor }}</p>
                <p class="mt-1 text-sm font-medium text-gray-900">Kes {{ number_format($product->retail_price, 2) }} </p>
            </div>
        </div>
        <div class="mt-6">
            <livewire:add-to-cart :product="$product" />
        </div>
    </div>
