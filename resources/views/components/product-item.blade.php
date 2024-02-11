    <div>
        <div class="">
            <div class=" h-72 w-full overflow-hidden rounded-lg">
                <a href="{{ route('product', [$product->category, $product->flavor, $product->brand, $product]) }}"" >
                    <img
                    src="{{ empty($product->image_id) ? '' : url('/storage/'.$product->productImage->path) }}"
                    alt="{{ $product->product }}"
                    class="h-full w-full object-cover object-center">
                </a>
            </div>
            <div class="mt-4">
                <a wire:navigate href="{{ route('product', [$product->category, $product->flavor, $product->brand, $product]) }}" class="text-sm font-medium text-gray-900 hover:text-indigo-600">{{ $product->product }}</a>
                <p class="mt-1 text-sm text-gray-500">{{ $product->brand->brand }} | {{ $product->flavor->flavor }} | {{ $product->amount->amount }} </p>
                <p class="mt-1 text-sm font-medium text-gray-900">Kes {{ number_format($product->retail_price, 2) }} </p>
            </div>
        </div>
        <div class="mt-6">
            <livewire:add-to-cart :product="$product" />
        </div>
    </div>
