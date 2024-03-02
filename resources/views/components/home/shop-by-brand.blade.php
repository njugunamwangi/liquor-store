    <!-- Category section -->
    <section aria-labelledby="category-heading" class="pt-24 sm:pt-32 xl:mx-auto xl:max-w-7xl xl:px-8">
        <div class="px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8 xl:px-0">
            <h2 id="category-heading" class="text-2xl font-bold tracking-tight text-gray-900">Shop by Brand</h2>
            <a href="{{ route('brands') }}" wire:navigate class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">
            Browse all brands
            <span aria-hidden="true"> &rarr;</span>
            </a>
        </div>

        <div class="mt-4 flow-root">
            <div class="-my-2">
                <div class="relative box-content overflow-x-auto py-2 xl:overflow-visible">
                    <div class="mt-8 grid grid-cols-1 gap-y-12 sm:p-4 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-5 xl:gap-x-8">
                        @foreach($brands as $brand)
                            <a href="{{ route('brand', $brand) }}" class="relative flex h-80 w-56 flex-col overflow-hidden rounded-lg p-6 hover:opacity-75 xl:w-auto">
                                <span aria-hidden="true" class="absolute inset-0">
                                <img src="{{ empty($brand->featured_image_id) ? "https://placehold.co/300x400?text=".$brand->brand  : url('/storage/'. $brand->featuredImage->path) }}" alt="{{ $brand->brand }}" class="h-full w-full object-cover object-center">
                                </span>
                                <span aria-hidden="true" class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-gray-800 opacity-50"></span>
                                <span class="relative mt-auto text-center text-xl font-bold text-white">{{ $brand->brand }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 px-4 sm:hidden">
            <a href="{{ route('brands') }}" wire:navigate class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500">
            Browse all brands
            <span aria-hidden="true"> &rarr;</span>
            </a>
        </div>
    </section>

