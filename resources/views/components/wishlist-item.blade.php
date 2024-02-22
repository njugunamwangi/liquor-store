    <div>
        <div class="">
            <div class=" h-72 w-full overflow-hidden rounded-lg">
                <a href="{{ route('product', $product) }}"" >
                    <img
                    src="{{ empty($product->image_id) ? "https://placehold.jp/30/200x300.png?text=image" : url('/storage/'.$product->productImage->path) }}"
                    alt="{{ $product->product }}"
                    class="h-full w-full object-cover object-center">
                </a>
            </div>
            <div class="mt-4">
                <a wire:navigate href="{{ route('product', $product) }}" class="text-sm font-medium text-gray-900 hover:text-indigo-600">{{ $product->product }}</a>
                <p class="mt-1 text-sm text-gray-500">{{ $product->brand->brand }} | {{ $product->flavor->flavor }} | {{ $product->amount->amount }} </p>
                <p class="mt-1 text-sm font-medium text-gray-900">Kes {{ number_format($product->retail_price, 2) }} </p>
            </div>
        </div>
        <div class="mt-6">
        <a href="#"
            wire:click="removeFromWishlist({{ $product->id }})"
            class="inline-block flex justify-center rounded-lg bg-red-600 px-4 py-3 text-center text-sm font-semibold text-white outline-none ring-indigo-300 transition duration-100 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
                <span>Remove</span>
        </a>
        </div>
    </div>
