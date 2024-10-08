<div>
    <div class="relative">
        <svg class="pointer-events-none absolute left-4 top-3.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
        </svg>
        <form method="get" action="{{ route('search') }}">
            <input
                wire:model.live="search"
                class="w-full h-12 pr-4 text-gray-800 bg-transparent border-0 pl-11 placeholder:text-gray-400 focus:ring-0 sm:text-sm"
                placeholder="Search..."
                role="combobox"
                aria-expanded="false"
                aria-controls="options">
        </form>
    </div>
    @if(strlen($search) == 0)

        <!-- Empty state, show/hide based on command palette state -->
        <div class="px-6 text-sm text-center py-14 sm:px-14">
            <svg class="w-6 h-6 mx-auto text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
            </svg>

            <p class="mt-4 font-semibold text-gray-900">Results go here</p>
            <p class="mt-2 text-gray-500">Type in the search bar to get products.</p>
        </div>

    @elseif(sizeof($products) > 0 && strlen($search) > 0)

        <div class="flex divide-x divide-gray-100 transform-gpu">
            <!-- Preview Visible: "sm:h-96" -->
            <div class="flex-auto min-w-0 px-6 py-4 overflow-y-auto max-h-96 scroll-py-4 sm:h-96">
                <!-- Results, show/hide based on command palette state. -->
                <ul class="-mx-2 text-sm text-gray-700" id="options" role="listbox">
                    <!-- Active: "bg-gray-100 text-gray-900" -->
                    @foreach($products as $product)
                        <li
                            wire:mouseover="setHoveredProduct({{ $product->id }})"
                            class="group flex cursor-default select-none items-center rounded-md p-2 hover:bg-gray-100 {{ !empty($hoveredProduct) && $product->id == $hoveredProduct->id ? 'bg-gray-100' : '' }} "
                            id="{{ $product->id }}" role="option" tabindex="-1">
                            <img
                                src="{{ empty($product->image_id) ? "https://placehold.jp/30/200x300.png?text=image" : url('/storage/'.$product->productImage->path) }}"
                                alt=" {{ $product->product }} "
                                class="flex-none w-6 h-6 rounded-full">
                            <span class="flex-auto ml-3 truncate">{{ $product->product }}</span>
                            <!-- Not Active: "hidden" -->
                            @if(!empty($hoveredProduct) && $product->id == $hoveredProduct->id)
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Active item side-panel, show/hide based on active state -->
            @if(!empty($hoveredProduct))
                <div class="flex-col flex-none hidden w-1/2 overflow-y-auto divide-y divide-gray-100 sm:flex">
                    <div class="flex-none p-6 text-center">
                        <a href="{{ route('product', $hoveredProduct) }}">
                            <img
                                src="{{ empty($hoveredProduct->image_id) ? "https://placehold.co/600x400?text=".$hoveredProduct->product : url('/storage/'.$hoveredProduct->productImage->path) }}"
                                alt=""
                                class="object-cover object-center w-56 h-56 mx-auto">
                        </a>
                    </div>
                    <div class="flex-none p-6 text-center">
                        <a href="{{ route('product', $hoveredProduct) }}" class="font-semibold text-gray-900">{{ $hoveredProduct->product }}</a>
                        <p class="text-sm leading-6 text-gray-500">{{ $hoveredProduct->brand->brand }} | {{ $hoveredProduct->flavor->flavor }} | {{ $hoveredProduct->amount->amount }}</p>
                        <p class="mb-2 mr-2 text-sm leading-6 text-gray-500">Kes {{ number_format($hoveredProduct->retail_price, 2) }}</p>


                        <a
                            wire:click.prevent="addToCart({{ $hoveredProduct->id }})"
                            href="#"
                            class="flex items-center justify-center px-8 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-gray-900">
                            Add to Cart
                        </a>

                    </div>
                </div>
            @endif
        </div>

    @else

        <!-- Empty state, show/hide based on command palette state -->
        <div class="px-6 text-sm text-center py-14 sm:px-14">
            <svg class="w-6 h-6 mx-auto text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
            </svg>

            <p class="mt-4 font-semibold text-gray-900">No products found</p>
            <p class="mt-2 text-gray-500">We couldn’t find anything with that term. Please try again.</p>
        </div>

    @endif

    <div class="px-6 py-4 text-sm text-center sm:px-14">
        <button
            @click="search = false"
            wire:click="closeSearch"
            type="button"
            class="w-full px-3 py-2 mt-6 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Close Search
        </button>
    </div>
</div>