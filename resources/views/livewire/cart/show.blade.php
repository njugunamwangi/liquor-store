<div>
    <div class="mt-12 lg:grid lg:grid-cols-12 lg:items-start lg:gap-x-12 xl:gap-x-16">
        @if($cart && $cart->count() > 0)
            <section aria-labelledby="cart-heading" class="lg:col-span-7">
                <h2 id="cart-heading" >Items in your shopping cart</h2>

                <ul role="list" class="divide-y divide-gray-200 border-b border-t border-gray-200">
                    @foreach($cart as $item)
                        <li class="flex py-6 sm:py-10">
                            <div class="flex-shrink-0">
                                <img
                                    src="{{ url('/storage/'.$item->product->productImage->path) }}"
                                    alt="{{ $item->product->product }}"
                                    class="h-24 w-24 rounded-md object-cover object-center sm:h-48 sm:w-48">
                            </div>

                            <div class="ml-4 flex flex-1 flex-col justify-between sm:ml-6">
                                <div class="relative pr-9 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:pr-0">
                                    <div>
                                        <div class="flex justify-between">
                                            <h3 class="text-sm">
                                            <a href="#" class="font-medium text-gray-700 hover:text-gray-800">{{ $item->product->product }}</a>
                                            </h3>
                                        </div>
                                        <div class="mt-1 flex text-sm">
                                            <p class="text-gray-500">{{ $item->product->flavor->flavor }}</p>
                                            <p class="ml-4 border-l border-gray-200 pl-4 text-gray-500">{{ $item->product->brand->brand }}</p>
                                        </div>
                                        <p class="mt-1 text-sm font-medium text-gray-900">Unit Price: Kes {{ number_format( $item->product->retail_price , 2 ) }}</p>
                                        <p class="mt-1 text-sm font-medium text-gray-900">
                                        </p>
                                    </div>

                                    <div class="mt-4 sm:mt-0 sm:pr-9">
                                        <label for="quantity-0" class="sr-only">{{ $item->product->product }}</label>
                                        <div class="flex flex-row">
                                            <button
                                                wire:click="incrementQuantity({{ $item->id }})"
                                                wire:loading.attr="disabled"
                                                type="button"
                                                class="relative inline-flex items-center rounded-l-md bg-white px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">
                                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 256 256" xml:space="preserve">
                                                    <defs>
                                                    </defs>
                                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                        <path d="M 88.516 43.517 H 46.484 V 1.484 C 46.484 0.664 45.819 0 45 0 s -1.484 0.664 -1.484 1.484 v 42.033 H 1.484 C 0.664 43.517 0 44.181 0 45 s 0.664 1.483 1.484 1.483 h 42.033 v 42.033 C 43.516 89.335 44.18 90 45 90 s 1.484 -0.664 1.484 -1.484 V 46.483 h 42.033 C 89.336 46.483 90 45.82 90 45 S 89.336 43.517 88.516 43.517 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                    </g>
                                                </svg>
                                            </button>

                                            <input disabled value="{{ $item->quantity }}" class="w-16 border border-gray-300 py-1.5 text-center text-base font-medium leading-5 text-gray-700 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500 sm:text-sm" />

                                            <button
                                                wire:click="decrementQuantity({{ $item->id }})"
                                                wire:loading.attr="disabled"
                                                type="button"
                                                class="relative -ml-px inline-flex items-center rounded-r-md bg-white px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-10">
                                                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 256 256" xml:space="preserve">
                                                    <defs>
                                                    </defs>
                                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                        <path d="M 88.616 46.384 H 1.583 c -0.82 0 -1.484 -0.664 -1.484 -1.483 s 0.664 -1.484 1.484 -1.484 h 87.033 c 0.819 0 1.484 0.664 1.484 1.484 S 89.435 46.384 88.616 46.384 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                    </g>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="absolute right-0 top-0">
                                            <button
                                                type="button"
                                                class="-m-2 inline-flex p-2 text-gray-400 hover:text-gray-500"
                                                wire:loading.attr="disabled"
                                                wire:click="removeItem({{ $item->id }})"
                                            >
                                                <span class="sr-only">Remove</span>
                                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>



                                <p class="mt-4 flex space-x-2 text-sm text-gray-700">
                                    SubTotal: Kes {{ number_format( $item->product->retail_price * $item->quantity, 2 ) }}
                                    @php $subTotal += $item->product->retail_price * $item->quantity @endphp
                                </p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </section>

            <!-- Order summary -->
            <section aria-labelledby="summary-heading" class="mt-16 rounded-lg bg-gray-50 px-4 py-6 sm:p-6 lg:col-span-5 lg:mt-0 lg:p-8">
                <h2 id="summary-heading" class="text-lg font-medium text-gray-900">Order summary</h2>

                <dl class="mt-6 space-y-4">
                <div class="flex items-center justify-between">
                    <dt class="text-sm text-gray-600">Sub Total</dt>
                    <dd class="text-sm font-medium text-gray-900">Kes {{ number_format($subTotal, 2) }}</dd>
                </div>
                <div class="flex items-center justify-between border-t border-gray-200 pt-4">
                    <dt class="flex items-center text-sm text-gray-600">
                    <span>Shipping estimate</span>
                    <a href="#" class="ml-2 flex-shrink-0 text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Learn more about how shipping is calculated</span>
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zM8.94 6.94a.75.75 0 11-1.061-1.061 3 3 0 112.871 5.026v.345a.75.75 0 01-1.5 0v-.5c0-.72.57-1.172 1.081-1.287A1.5 1.5 0 108.94 6.94zM10 15a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    </dt>
                    <dd class="text-sm font-medium text-gray-900">Kes {{ number_format($shipping, 2) }}</dd>
                </div>
                <div class="flex items-center justify-between border-t border-gray-200 pt-4">
                    <dt class="text-base font-medium text-gray-900">Order total</dt>
                    <dd class="text-base font-medium text-gray-900">Kes {{ number_format($subTotal + $shipping, 2) }}</dd>
                </div>
                </dl>

                <div class="mt-6">
                    <button
                        href="{{ route('checkout') }}"
                        wire:navigate
                        class="w-full rounded-md border border-transparent bg-indigo-600 px-4 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">
                            Checkout
                    </button>
                </div>
            </section>
        @else
            <section aria-labelledby="cart-heading" class="lg:col-span-7">
                <h2 id="cart-heading" >Your shopping cart is empty</h2>
            </section>
        @endif
    </div>
</div>
