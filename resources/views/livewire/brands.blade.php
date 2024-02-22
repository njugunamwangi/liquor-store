<div x-data="{ mobile: false }">
    <div class="bg-white">
        <div>
            <!--
            Mobile filter dialog

            Off-canvas menu for mobile, show/hide based on off-canvas menu state.
            -->
            <div x-cloak x-show="mobile" class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
            <!--
                Off-canvas menu backdrop, show/hide based on off-canvas menu state.

                Entering: "transition-opacity ease-linear duration-300"
                From: "opacity-0"
                To: "opacity-100"
                Leaving: "transition-opacity ease-linear duration-300"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div class="fixed inset-0 bg-black bg-opacity-25"></div>

                <div class="fixed inset-0 z-40 flex">
                    <!--
                    Off-canvas menu, show/hide based on off-canvas menu state.

                    Entering: "transition ease-in-out duration-300 transform"
                        From: "translate-x-full"
                        To: "translate-x-0"
                    Leaving: "transition ease-in-out duration-300 transform"
                        From: "translate-x-0"
                        To: "translate-x-full"
                    -->
                    <div class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-6 shadow-xl">
                        <div class="flex items-center justify-end px-4">
                            <button @click="mobile = !mobile" type="button" class="-mr-2 flex h-10 w-10 items-center justify-center p-2 text-gray-400 hover:text-gray-500">
                                <span class="sr-only">Close menu</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                    <!-- Filters -->
                        <div class="mt-4">
                            <div class="border-t border-gray-200 pb-4 pt-4">
                                <fieldset>
                                    <legend class="w-full px-2">
                                    <!-- Expand/collapse section button -->
                                    <button type="button" class="flex w-full items-center justify-between p-2 text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" aria-expanded="false">
                                        <span class="text-sm font-medium text-gray-900">Brands</span>
                                    </button>
                                    </legend>
                                    <div class="px-4 pb-2 pt-4" id="filter-section-0">
                                    <div class="space-y-6">
                                        @foreach($brands as $brand)
                                            <div
                                                wire:click="setHoveredBrand({{ $brand->id }})"
                                                class="flex items-center p-2 {{ !empty($hoveredBrand) && $brand->id == $hoveredBrand->id ? 'bg-gray-100' : '' }} " ">
                                                {{ $brand->brand }}
                                            </div>
                                        @endforeach
                                    </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <main class="mx-auto max-w-2xl px-4 py-8 sm:px-6 sm:py-4 lg:max-w-7xl lg:px-8">

                <div class="pt-4 lg:grid lg:grid-cols-3 lg:gap-x-8 xl:grid-cols-4">
                    <aside>
                        <h2 class="sr-only">Filters</h2>

                        <!-- Mobile filter dialog toggle, controls the 'mobileFilterDialogOpen' state. -->
                        <button @click="mobile = !mobile" type="button" class="inline-flex items-center lg:hidden text-gray-700">
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>

                        <div class="hidden lg:block">
                            <form class="space-y-10 divide-y divide-gray-200">
                                <div class="pt-4">
                                    <fieldset>
                                        <legend class="block text-sm font-medium text-gray-900">Brands</legend>

                                        <div class="space-y-3 pt-4">
                                            @foreach($brands as $brand)
                                                <div
                                                    wire:mouseover="setHoveredBrand({{ $brand->id }})"
                                                    class="flex items-center hover:bg-gray-100 p-2 {{ !empty($hoveredBrand) && $brand->id == $hoveredBrand->id ? 'bg-gray-100' : '' }} ">
                                                    <label for="sizes-0" class="ml-3 text-sm text-gray-600">{{ $brand->brand }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </fieldset>
                                </div>
                            </form>
                        </div>
                    </aside>

                    <!-- Product grid -->
                    <div class="lg:col-span-2 lg:mt-0 xl:col-span-3">
                        <div class="bg-white">
                            <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-4 lg:max-w-7xl lg:px-8">
                                <h2 class="text-xl mb-2 font-bold text-gray-900">{{ empty($hoveredBrand) ? '' : $hoveredBrand->brand }}</h2>

                                <div class="mt-4 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-3 xl:gap-x-8">
                                    @if(!empty($hoveredBrand))
                                        @foreach($hoveredBrand->products as $product)
                                            <x-category-item :product="$product" />
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>

</div>
