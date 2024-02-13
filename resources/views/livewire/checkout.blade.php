<div class="mx-auto grid max-w-lg grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
    @if($cart && $cart->count() > 0)
        <div class="mx-auto w-full max-w-lg">
            <h2 class="sr-only">Order summary</h2>

            <div class="flow-root">
                <ul role="list" class="-my-6 divide-y divide-gray-200">
                    @foreach($cart as $item)
                        <li class="flex space-x-6 py-6">
                            <img
                                src="{{ empty($item->product->image_id) ? "https://placehold.jp/30/200x300.png?text=image" : url('/storage/'.$item->product->productImage->path) }}"
                                alt="{{ $item->product->product }}"
                                class="h-24 w-24 flex-none rounded-md bg-gray-100 object-cover object-center">
                            <div class="flex-auto">
                                <div class="space-y-1 sm:flex sm:items-start sm:justify-between sm:space-x-6">
                                    <div class="flex-auto space-y-1 text-sm font-medium">
                                        <h3 class="text-gray-900">
                                        <a href="#">{{ $item->product->product }}</a>
                                        </h3>
                                        <div class="flex justify-between">
                                            <p class="text-gray-900">{{ $item->quantity }} x Kes {{ number_format( $item->product->retail_price , 2 ) }}</p>
                                            <p class="text-gray-900">
                                                Kes {{ number_format( $item->product->retail_price * $item->quantity, 2 ) }}
                                                @php $subTotal += $item->product->retail_price * $item->quantity @endphp
                                            </p>
                                        </div>
                                        <p class="hidden text-gray-500 sm:block">{{ $item->product->brand->brand }}</p>
                                        <p class="hidden text-gray-500 sm:block">{{ $item->product->amount->amount }}</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>

            <dl class="mt-10 space-y-6 text-sm font-medium text-gray-500">
            <div class="flex justify-between">
                <dt>Subtotal</dt>
                <dd class="text-gray-900">Kes {{ number_format($subTotal, 2) }}</dd>
            </div>
            <div class="flex justify-between">
                <dt>Shipping</dt>
                <dd class="text-gray-900">Kes {{ number_format($shipping, 2) }}</dd>
            </div>
            <div class="flex justify-between border-t border-gray-200 pt-6 text-gray-900">
                <dt class="text-base">Total</dt>
                <dd class="text-base">Kes {{ number_format($subTotal + $shipping, 2) }}</dd>
            </div>
            </dl>
        </div>

        <div class="mx-auto w-full max-w-lg">
            <div class="-my-6">
                <h2 class="text-lg font-medium text-gray-900">Billing information</h2>

                <div class="mt-6">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <div class="mt-1">
                        <input
                            wire:model="name"
                            class="block w-full rounded-md {{ $errors->has('name') ? 'border-red-500'  : 'border-gray-300' }} shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" >
                    </div>
                    @error('name')
                        <p class="text-xs text-red-500 pt-1">{{ $message }} </p>
                    @enderror
                </div>
                <div class="mt-6">
                    <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                    <div class="mt-1">
                    <input
                        wire:model="email"
                        class="block w-full rounded-md {{ $errors->has('email') ? 'border-red-500'  : 'border-gray-300' }} border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    @error('email')
                        <p class="text-xs text-red-500 pt-1">{{ $message }} </p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone number</label>
                    <div class="mt-1">
                    <input wire:model="phone" class="block w-full rounded-md {{ $errors->has('phone') ? 'border-red-500'  : 'border-gray-300' }} border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    @error('phone')
                        <p class="text-xs text-red-500 pt-1">{{ $message }} </p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="address1" class="block text-sm font-medium text-gray-700">Address 1</label>
                    <div class="mt-1">
                    <input wire:model="address1" class="block w-full rounded-md {{ $errors->has('address1') ? 'border-red-500'  : 'border-gray-300' }} border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    @error('address1')
                        <p class="text-xs text-red-500 pt-1">{{ $message }} </p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="address2" class="block text-sm font-medium text-gray-700">Address 2</label>
                    <div class="mt-1">
                    <input wire:model="address2" class="block w-full rounded-md {{ $errors->has('address2') ? 'border-red-500'  : 'border-gray-300' }} border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    @error('address2')
                        <p class="text-xs text-red-500 pt-1">{{ $message }} </p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                    <div class="mt-1">
                    <input wire:model="city" class="block w-full rounded-md {{ $errors->has('city') ? 'border-red-500'  : 'border-gray-300' }} border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    @error('city')
                        <p class="text-xs text-red-500 pt-1">{{ $message }} </p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="state" class="block text-sm font-medium text-gray-700">State</label>
                    <div class="mt-1">
                    <input wire:model="state" class="block w-full rounded-md {{ $errors->has('state') ? 'border-red-500'  : 'border-gray-300' }} border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    @error('state')
                        <p class="text-xs text-red-500 pt-1">{{ $message }} </p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="zipcode" class="block text-sm font-medium text-gray-700">Zip Code</label>
                    <div class="mt-1">
                    <input wire:model="zipcode" class="block w-full rounded-md {{ $errors->has('zipcode') ? 'border-red-500'  : 'border-gray-300' }} border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    </div>
                    @error('zipcode')
                        <p class="text-xs text-red-500 pt-1">{{ $message }} </p>
                    @enderror
                </div>

                <!-- Submit button, enable/disable based on form state -->
                <button
                    wire:click="placeOrder"
                    class="mt-6 w-full rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:bg-gray-100 disabled:text-gray-500">
                    Place Order
                </button>
                <div wire:loading class="mt-4 text-center text-emerald-500" >
                    Processing...
                </div>
            </div>

            <div class="mt-10 divide-y divide-gray-200 border-b border-t border-gray-200">
            </div>
        </div>
    @else
        <section aria-labelledby="cart-heading" class="lg:col-span-7">
            <h2 id="cart-heading" >Your shopping cart is empty</h2>
        </section>
    @endif
</div>