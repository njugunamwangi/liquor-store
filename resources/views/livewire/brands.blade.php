<div>
    <div class="bg-white">
        <div>
            <!--
            Mobile filter dialog

            Off-canvas menu for mobile, show/hide based on off-canvas menu state.
            -->
            <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
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
                    <div class="flex items-center justify-between px-4">
                        <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                        <button type="button" class="-mr-2 flex h-10 w-10 items-center justify-center p-2 text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        </button>
                    </div>

                    <!-- Filters -->
                    <form class="mt-4">
                        <div class="border-t border-gray-200 pb-4 pt-4">
                        <fieldset>
                            <legend class="w-full px-2">
                            <!-- Expand/collapse section button -->
                            <button type="button" class="flex w-full items-center justify-between p-2 text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" aria-expanded="false">
                                <span class="text-sm font-medium text-gray-900">Color</span>
                                <span class="ml-6 flex h-7 items-center">
                                <!--
                                    Expand/collapse icon, toggle classes based on section open state.

                                    Open: "-rotate-180", Closed: "rotate-0"
                                -->
                                <svg class="rotate-0 h-5 w-5 transform" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                                </span>
                            </button>
                            </legend>
                            <div class="px-4 pb-2 pt-4" id="filter-section-0">
                            <div class="space-y-6">
                                <div class="flex items-center">
                                <input id="color-0-mobile" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="color-0-mobile" class="ml-3 text-sm text-gray-500">White</label>
                                </div>
                                <div class="flex items-center">
                                <input id="color-1-mobile" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="color-1-mobile" class="ml-3 text-sm text-gray-500">Beige</label>
                                </div>
                                <div class="flex items-center">
                                <input id="color-2-mobile" name="color[]" value="blue" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="color-2-mobile" class="ml-3 text-sm text-gray-500">Blue</label>
                                </div>
                                <div class="flex items-center">
                                <input id="color-3-mobile" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="color-3-mobile" class="ml-3 text-sm text-gray-500">Brown</label>
                                </div>
                                <div class="flex items-center">
                                <input id="color-4-mobile" name="color[]" value="green" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="color-4-mobile" class="ml-3 text-sm text-gray-500">Green</label>
                                </div>
                                <div class="flex items-center">
                                <input id="color-5-mobile" name="color[]" value="purple" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="color-5-mobile" class="ml-3 text-sm text-gray-500">Purple</label>
                                </div>
                            </div>
                            </div>
                        </fieldset>
                        </div>
                        <div class="border-t border-gray-200 pb-4 pt-4">
                        <fieldset>
                            <legend class="w-full px-2">
                            <!-- Expand/collapse section button -->
                            <button type="button" class="flex w-full items-center justify-between p-2 text-gray-400 hover:text-gray-500" aria-controls="filter-section-1" aria-expanded="false">
                                <span class="text-sm font-medium text-gray-900">Category</span>
                                <span class="ml-6 flex h-7 items-center">
                                <!--
                                    Expand/collapse icon, toggle classes based on section open state.

                                    Open: "-rotate-180", Closed: "rotate-0"
                                -->
                                <svg class="rotate-0 h-5 w-5 transform" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                                </span>
                            </button>
                            </legend>
                            <div class="px-4 pb-2 pt-4" id="filter-section-1">
                            <div class="space-y-6">
                                <div class="flex items-center">
                                <input id="category-0-mobile" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="category-0-mobile" class="ml-3 text-sm text-gray-500">All New Arrivals</label>
                                </div>
                                <div class="flex items-center">
                                <input id="category-1-mobile" name="category[]" value="tees" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="category-1-mobile" class="ml-3 text-sm text-gray-500">Tees</label>
                                </div>
                                <div class="flex items-center">
                                <input id="category-2-mobile" name="category[]" value="crewnecks" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="category-2-mobile" class="ml-3 text-sm text-gray-500">Crewnecks</label>
                                </div>
                                <div class="flex items-center">
                                <input id="category-3-mobile" name="category[]" value="sweatshirts" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="category-3-mobile" class="ml-3 text-sm text-gray-500">Sweatshirts</label>
                                </div>
                                <div class="flex items-center">
                                <input id="category-4-mobile" name="category[]" value="pants-shorts" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                <label for="category-4-mobile" class="ml-3 text-sm text-gray-500">Pants &amp; Shorts</label>
                                </div>
                            </div>
                            </div>
                        </fieldset>
                        </div>
                        <div class="border-t border-gray-200 pb-4 pt-4">
                        <fieldset>
                            <legend class="w-full px-2">
                                <!-- Expand/collapse section button -->
                                <button type="button" class="flex w-full items-center justify-between p-2 text-gray-400 hover:text-gray-500" aria-controls="filter-section-2" aria-expanded="false">
                                    <span class="text-sm font-medium text-gray-900">Sizes</span>
                                    <span class="ml-6 flex h-7 items-center">
                                    <!--
                                        Expand/collapse icon, toggle classes based on section open state.

                                        Open: "-rotate-180", Closed: "rotate-0"
                                    -->
                                    <svg class="rotate-0 h-5 w-5 transform" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                    </svg>
                                    </span>
                                </button>
                            </legend>
                            <div class="px-4 pb-2 pt-4" id="filter-section-2">
                                <div class="space-y-6">
                                    <div class="flex items-center">
                                    <input id="sizes-0-mobile" name="sizes[]" value="xs" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="sizes-0-mobile" class="ml-3 text-sm text-gray-500">XS</label>
                                    </div>
                                    <div class="flex items-center">
                                    <input id="sizes-1-mobile" name="sizes[]" value="s" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="sizes-1-mobile" class="ml-3 text-sm text-gray-500">S</label>
                                    </div>
                                    <div class="flex items-center">
                                    <input id="sizes-2-mobile" name="sizes[]" value="m" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="sizes-2-mobile" class="ml-3 text-sm text-gray-500">M</label>
                                    </div>
                                    <div class="flex items-center">
                                    <input id="sizes-3-mobile" name="sizes[]" value="l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="sizes-3-mobile" class="ml-3 text-sm text-gray-500">L</label>
                                    </div>
                                    <div class="flex items-center">
                                    <input id="sizes-4-mobile" name="sizes[]" value="xl" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="sizes-4-mobile" class="ml-3 text-sm text-gray-500">XL</label>
                                    </div>
                                    <div class="flex items-center">
                                    <input id="sizes-5-mobile" name="sizes[]" value="2xl" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                    <label for="sizes-5-mobile" class="ml-3 text-sm text-gray-500">2XL</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        </div>
                    </form>
                    </div>
                </div>
            </div>

            <main class="mx-auto max-w-2xl px-4 py-8 sm:px-6 sm:py-4 lg:max-w-7xl lg:px-8">

                <div class="pt-4 lg:grid lg:grid-cols-3 lg:gap-x-8 xl:grid-cols-4">
                    <aside>
                        <h2 class="sr-only">Filters</h2>

                        <!-- Mobile filter dialog toggle, controls the 'mobileFilterDialogOpen' state. -->
                        <button type="button" class="inline-flex items-center lg:hidden">
                            <span class="text-sm font-medium text-gray-700">Filters</span>
                            <svg class="ml-1 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
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

                                <div class="mt-4 grid grid-cols-1 gap-y-12 sm:grid-cols-1 sm:gap-x-6 lg:grid-cols-3 xl:gap-x-8">
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
