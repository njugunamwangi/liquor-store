<div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-4 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold text-center text-gray-900">{{ $brand->brand }}</h2>

    <div class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
        <!-- Product Start -->
        @foreach($products as $product)
            <x-product-item :product="$product" />
        @endforeach
        <!-- Product End -->
    </div>
  </div>