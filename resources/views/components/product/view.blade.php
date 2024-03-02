    <x-app-layout :title="$product->product">
        <div class="bg-white">
            <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8">
                <!-- Product details -->
                <div class="lg:max-w-lg lg:self-end">
                <nav aria-label="Breadcrumb">
                    <ol role="list" class="flex items-center space-x-2">
                        <li>
                            <div class="flex items-center text-sm">
                            <a href="#" class="font-medium text-gray-500 hover:text-gray-900">{{ $product->category->category }}</a>
                            <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="ml-2 h-5 w-5 flex-shrink-0 text-gray-300">
                                <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                            </svg>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center text-sm">
                            <a href="{{ route('flavor', $product->flavor) }}" wire:navigate class="font-medium text-gray-500 hover:text-gray-900">{{ $product->flavor->flavor }}</a>
                            <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="ml-2 h-5 w-5 flex-shrink-0 text-gray-300">
                                <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" />
                            </svg>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center text-sm">
                            <a href="{{ route('brand', $product->brand) }}" wire:navigate class="font-medium text-gray-500 hover:text-gray-900">{{ $product->brand->brand }}</a>
                            </div>
                        </li>
                    </ol>
                </nav>

                <div class="mt-4">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $product->product }}</h1>
                </div>

                <section aria-labelledby="information-heading" class="mt-4">
                    <h2 id="information-heading" class="sr-only">Product information</h2>

                    <div class="flex items-center">
                        <p class="text-lg text-gray-900 sm:text-2xl mr-2 ">Kes {{ $product->retail_price }}</p>
                    <p class="text-lg text-red-600 sm:text-xl line-through">Kes {{ $product->list_price }}</p>
                    </div>

                    <div class="mt-4 space-y-6">
                    <p class="text-base text-gray-500">

                    </p>
                    </div>

                    <div class="mt-6 flex items-center">
                    <svg class="h-5 w-5 flex-shrink-0 text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                    </svg>
                    <p class="ml-2 text-sm text-gray-500">In stock and ready to ship</p>
                    </div>
                </section>
                </div>

                <!-- Product image -->
                <div class="mt-10 lg:col-start-2 lg:row-span-2 lg:mt-0 lg:self-center">
                <div class=" overflow-hidden rounded-lg">
                    <img src="{{ empty($product->image_id) ? "https://placehold.co/300x400?text=".$product->product : url('/storage/'.$product->productImage->path) }}" alt="{{ $product->product }}" class="h-full w-full object-cover object-center">
                </div>
                </div>

                <!-- Product form -->
                <div class="mt-10 lg:col-start-1 lg:row-start-2 lg:max-w-lg lg:self-start">
                <section aria-labelledby="options-heading">

                    <div class="sm:flex sm:justify-between">
                    </div>
                    <div class="mt-10">

                        <div class="flex gap-2.5">
                            <livewire:add-to-cart :product='$product' />

                            <livewire:add-to-wishlist :product='$product' />
                        </div>
                    </div>
                </section>
                </div>
            </div>
        </div>

    </x-app-layout>
