<div x-data="{ openW: false, openM: false}" >
    <div class="bg-white">
    <!--
        Mobile menu

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
            From: "-translate-x-full"
            To: "translate-x-0"
            Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "-translate-x-full"
        -->
        <div class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
            <div class="flex px-4 pb-2 pt-5">
            <button type="button" class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
                <span class="sr-only">Close menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            </div>

            <!-- Links -->
            <div class="mt-2">
            <div class="border-b border-gray-200">
                <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">
                <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-900" -->
                <button id="tabs-1-tab-1" class="border-transparent text-gray-900 flex-1 whitespace-nowrap border-b-2 px-1 py-4 text-base font-medium" aria-controls="tabs-1-panel-1" role="tab" type="button">Women</button>
                <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-900" -->
                <button id="tabs-1-tab-2" class="border-transparent text-gray-900 flex-1 whitespace-nowrap border-b-2 px-1 py-4 text-base font-medium" aria-controls="tabs-1-panel-2" role="tab" type="button">Men</button>
                </div>
            </div>

            <!-- 'Women' tab panel, show/hide based on tab state. -->
            <div id="tabs-1-panel-1" class="space-y-10 px-4 pb-8 pt-10" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
                <div class="space-y-4">
                <div class="group aspect-h-1 aspect-w-1 relative overflow-hidden rounded-md bg-gray-100">
                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-cover object-center group-hover:opacity-75">
                    <div class="flex flex-col justify-end">
                    <div class="bg-white bg-opacity-60 p-4 text-base sm:text-sm">
                        <a href="#" class="font-medium text-gray-900">
                        <span class="absolute inset-0" aria-hidden="true"></span>
                        New Arrivals
                        </a>
                        <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                    </div>
                    </div>
                </div>
                <div class="group aspect-h-1 aspect-w-1 relative overflow-hidden rounded-md bg-gray-100">
                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-cover object-center group-hover:opacity-75">
                    <div class="flex flex-col justify-end">
                    <div class="bg-white bg-opacity-60 p-4 text-base sm:text-sm">
                        <a href="#" class="font-medium text-gray-900">
                        <span class="absolute inset-0" aria-hidden="true"></span>
                        Basic Tees
                        </a>
                        <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                    </div>
                    </div>
                </div>
                <div class="group aspect-h-1 aspect-w-1 relative overflow-hidden rounded-md bg-gray-100">
                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-03.jpg" alt="Model wearing minimalist watch with black wristband and white watch face." class="object-cover object-center group-hover:opacity-75">
                    <div class="flex flex-col justify-end">
                    <div class="bg-white bg-opacity-60 p-4 text-base sm:text-sm">
                        <a href="#" class="font-medium text-gray-900">
                        <span class="absolute inset-0" aria-hidden="true"></span>
                        Accessories
                        </a>
                        <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="space-y-10">
                <div>
                    <p id="women-shoes-heading-mobile" class="font-medium text-gray-900">Shoes &amp; Accessories</p>
                    <ul role="list" aria-labelledby="women-shoes-heading-mobile" class="mt-6 flex flex-col space-y-6">
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Sneakers</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Boots</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Flats</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Sandals</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Heels</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Socks</a>
                    </li>
                    </ul>
                </div>
                <div>
                    <p id="women-collection-heading-mobile" class="font-medium text-gray-900">Shop Collection</p>
                    <ul role="list" aria-labelledby="women-collection-heading-mobile" class="mt-6 flex flex-col space-y-6">
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Everything</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Core</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">New Arrivals</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Sale</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Accessories</a>
                    </li>
                    </ul>
                </div>
                </div>
                <div class="space-y-10">
                <div>
                    <p id="women-clothing-heading-mobile" class="font-medium text-gray-900">All Clothing</p>
                    <ul role="list" aria-labelledby="women-clothing-heading-mobile" class="mt-6 flex flex-col space-y-6">
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Basic Tees</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Artwork Tees</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Tops</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Bottoms</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Swimwear</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Underwear</a>
                    </li>
                    </ul>
                </div>
                <div>
                    <p id="women-accessories-heading-mobile" class="font-medium text-gray-900">All Accessories</p>
                    <ul role="list" aria-labelledby="women-accessories-heading-mobile" class="mt-6 flex flex-col space-y-6">
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Watches</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Wallets</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Bags</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Sunglasses</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Hats</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Belts</a>
                    </li>
                    </ul>
                </div>
                </div>
                <div class="space-y-10">
                <div>
                    <p id="women-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
                    <ul role="list" aria-labelledby="women-brands-heading-mobile" class="mt-6 flex flex-col space-y-6">
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Full Nelson</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">My Way</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Re-Arranged</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Counterfeit</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Significant Other</a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            <!-- 'Men' tab panel, show/hide based on tab state. -->
            <div id="tabs-1-panel-2" class="space-y-10 px-4 pb-8 pt-10" aria-labelledby="tabs-1-tab-2" role="tabpanel" tabindex="0">
                <div class="space-y-4">
                <div class="group aspect-h-1 aspect-w-1 relative overflow-hidden rounded-md bg-gray-100">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-01.jpg" alt="Wooden shelf with gray and olive drab green baseball caps, next to wooden clothes hanger with sweaters." class="object-cover object-center group-hover:opacity-75">
                    <div class="flex flex-col justify-end">
                    <div class="bg-white bg-opacity-60 p-4 text-base sm:text-sm">
                        <a href="#" class="font-medium text-gray-900">
                        <span class="absolute inset-0" aria-hidden="true"></span>
                        Accessories
                        </a>
                        <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                    </div>
                    </div>
                </div>
                <div class="group aspect-h-1 aspect-w-1 relative overflow-hidden rounded-md bg-gray-100">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg" alt="Drawstring top with elastic loop closure and textured interior padding." class="object-cover object-center group-hover:opacity-75">
                    <div class="flex flex-col justify-end">
                    <div class="bg-white bg-opacity-60 p-4 text-base sm:text-sm">
                        <a href="#" class="font-medium text-gray-900">
                        <span class="absolute inset-0" aria-hidden="true"></span>
                        New Arrivals
                        </a>
                        <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                    </div>
                    </div>
                </div>
                <div class="group aspect-h-1 aspect-w-1 relative overflow-hidden rounded-md bg-gray-100">
                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg" alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt." class="object-cover object-center group-hover:opacity-75">
                    <div class="flex flex-col justify-end">
                    <div class="bg-white bg-opacity-60 p-4 text-base sm:text-sm">
                        <a href="#" class="font-medium text-gray-900">
                        <span class="absolute inset-0" aria-hidden="true"></span>
                        Artwork Tees
                        </a>
                        <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="space-y-10">
                <div>
                    <p id="men-shoes-heading-mobile" class="font-medium text-gray-900">Shoes &amp; Accessories</p>
                    <ul role="list" aria-labelledby="men-shoes-heading-mobile" class="mt-6 flex flex-col space-y-6">
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Sneakers</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Boots</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Sandals</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Socks</a>
                    </li>
                    </ul>
                </div>
                <div>
                    <p id="men-collection-heading-mobile" class="font-medium text-gray-900">Shop Collection</p>
                    <ul role="list" aria-labelledby="men-collection-heading-mobile" class="mt-6 flex flex-col space-y-6">
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Everything</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Core</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">New Arrivals</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Sale</a>
                    </li>
                    </ul>
                </div>
                </div>
                <div class="space-y-10">
                <div>
                    <p id="men-clothing-heading-mobile" class="font-medium text-gray-900">All Clothing</p>
                    <ul role="list" aria-labelledby="men-clothing-heading-mobile" class="mt-6 flex flex-col space-y-6">
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Basic Tees</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Artwork Tees</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Pants</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Hoodies</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Swimsuits</a>
                    </li>
                    </ul>
                </div>
                <div>
                    <p id="men-accessories-heading-mobile" class="font-medium text-gray-900">All Accessories</p>
                    <ul role="list" aria-labelledby="men-accessories-heading-mobile" class="mt-6 flex flex-col space-y-6">
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Watches</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Wallets</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Bags</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Sunglasses</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Hats</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Belts</a>
                    </li>
                    </ul>
                </div>
                </div>
                <div class="space-y-10">
                <div>
                    <p id="men-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
                    <ul role="list" aria-labelledby="men-brands-heading-mobile" class="mt-6 flex flex-col space-y-6">
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Re-Arranged</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Counterfeit</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">Full Nelson</a>
                    </li>
                    <li class="flow-root">
                        <a href="#" class="-m-2 block p-2 text-gray-500">My Way</a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            </div>

            <div class="space-y-6 border-t border-gray-200 px-4 py-6">
            <div class="flow-root">
                <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
            </div>
            <div class="flow-root">
                <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Stores</a>
            </div>
            </div>

            <div class="border-t border-gray-200 px-4 py-6">
            <a href="#" class="-m-2 flex items-center p-2">
                <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt="" class="block h-auto w-5 flex-shrink-0">
                <span class="ml-3 block text-base font-medium text-gray-900">CAD</span>
                <span class="sr-only">, change currency</span>
            </a>
            </div>
        </div>
        </div>
    </div>

    <header class="relative bg-white">
        <nav aria-label="Top" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="border-b border-gray-200">
                <div class="flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center lg:hidden">
                    <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                    <button type="button" class="-ml-2 rounded-md bg-white p-2 text-gray-400">
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    </button>

                    <a href="#" class="ml-2 p-2 text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Search</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                    </a>
                </div>

                <!-- Flyout menus -->
                <div class="hidden lg:block lg:flex-1 lg:self-stretch">
                    <div class="flex h-full space-x-8">
                        <div class="flex">
                            <div class="relative flex">
                                <!-- Item active: "text-indigo-600", Item inactive: "text-gray-700 hover:text-gray-800" -->
                                <button @click="openW = !openW" type="button" class="text-gray-700 hover:text-gray-800 relative z-10 flex items-center justify-center text-sm font-medium transition-colors duration-200 ease-out" aria-expanded="false">
                                    Women
                                    <!-- Open: "bg-indigo-600", Closed: "" -->
                                    <span class="absolute inset-x-0 bottom-0 h-0.5 transition-colors duration-200 ease-out sm:mt-5 sm:translate-y-px sm:transform" aria-hidden="true"></span>
                                </button>
                            </div>

                            <div class="fixed absolute inset-x-0 top-full">
                                <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                                <div
                                    class="relative bg-white opacity-100"
                                    x-show="openW"
                                    x-cloak
                                    @click.away="openW = false"
                                    >
                                    <div class="mx-auto max-w-7xl px-8">
                                        <div class="grid grid-cols-2 gap-x-8 gap-y-10 py-16">
                                            <div class="grid grid-cols-2 grid-rows-1 gap-8 text-sm">
                                                <div class="group aspect-w-1 aspect-h-1 relative overflow-hidden rounded-md bg-gray-100 aspect-w-2 col-span-2">
                                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-cover object-center group-hover:opacity-75">
                                                    <div class="flex flex-col justify-end">
                                                    <div class="bg-white bg-opacity-60 p-4 text-sm">
                                                        <a href="#" class="font-medium text-gray-900">
                                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                                        New Arrivalss
                                                        </a>
                                                        <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="group aspect-w-1 aspect-h-1 relative overflow-hidden rounded-md bg-gray-100">
                                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-cover object-center group-hover:opacity-75">
                                                    <div class="flex flex-col justify-end">
                                                    <div class="bg-white bg-opacity-60 p-4 text-sm">
                                                        <a href="#" class="font-medium text-gray-900">
                                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                                        Basic Tees
                                                        </a>
                                                        <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="group aspect-w-1 aspect-h-1 relative overflow-hidden rounded-md bg-gray-100">
                                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-03.jpg" alt="Model wearing minimalist watch with black wristband and white watch face." class="object-cover object-center group-hover:opacity-75">
                                                    <div class="flex flex-col justify-end">
                                                    <div class="bg-white bg-opacity-60 p-4 text-sm">
                                                        <a href="#" class="font-medium text-gray-900">
                                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                                        Accessories
                                                        </a>
                                                        <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="grid grid-cols-3 gap-x-8 gap-y-10 text-sm text-gray-500">
                                                <div class="space-y-10">
                                                    <div>
                                                    <p id="women-shoes-heading" class="font-medium text-gray-900">Shoes &amp; Accessories</p>
                                                    <ul role="list" aria-labelledby="women-shoes-heading" class="mt-4 space-y-4">
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Sneakers</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Boots</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Flats</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Sandals</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Heels</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Socks</a>
                                                        </li>
                                                    </ul>
                                                    </div>
                                                    <div>
                                                    <p id="women-collection-heading" class="font-medium text-gray-900">Shop Collection</p>
                                                    <ul role="list" aria-labelledby="women-collection-heading" class="mt-4 space-y-4">
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Everything</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Core</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">New Arrivals</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Sale</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Accessories</a>
                                                        </li>
                                                    </ul>
                                                    </div>
                                                </div>
                                                <div class="space-y-10">
                                                    <div>
                                                    <p id="women-clothing-heading" class="font-medium text-gray-900">All Clothing</p>
                                                    <ul role="list" aria-labelledby="women-clothing-heading" class="mt-4 space-y-4">
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Basic Tees</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Artwork Tees</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Tops</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Bottoms</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Swimwear</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Underwear</a>
                                                        </li>
                                                    </ul>
                                                    </div>
                                                    <div>
                                                    <p id="women-accessories-heading" class="font-medium text-gray-900">All Accessories</p>
                                                    <ul role="list" aria-labelledby="women-accessories-heading" class="mt-4 space-y-4">
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Watches</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Wallets</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Bags</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Sunglasses</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Hats</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Belts</a>
                                                        </li>
                                                    </ul>
                                                    </div>
                                                </div>
                                                <div class="space-y-10">
                                                    <div>
                                                    <p id="women-brands-heading" class="font-medium text-gray-900">Brands</p>
                                                    <ul role="list" aria-labelledby="women-brands-heading" class="mt-4 space-y-4">
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Full Nelson</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">My Way</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Re-Arranged</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Counterfeit</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Significant Other</a>
                                                        </li>
                                                    </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="relative flex">
                            <!-- Item active: "text-indigo-600", Item inactive: "text-gray-700 hover:text-gray-800" -->
                            <button type="button" @click="openM = !openM" class="text-gray-700 hover:text-gray-800 relative z-10 flex items-center justify-center text-sm font-medium transition-colors duration-200 ease-out" aria-expanded="false">
                                Men
                                <!-- Open: "bg-indigo-600", Closed: "" -->
                                <span class="absolute inset-x-0 bottom-0 h-0.5 transition-colors duration-200 ease-out sm:mt-5 sm:translate-y-px sm:transform" aria-hidden="true"></span>
                            </button>
                            </div>

                            <!--
                            'Men' flyout menu, show/hide based on flyout menu state.

                            Entering: "transition ease-out duration-200"
                                From: "opacity-0"
                                To: "opacity-100"
                            Leaving: "transition ease-in duration-150"
                                From: "opacity-100"
                                To: "opacity-0"
                            -->
                            <div class="absolute inset-x-0 top-full">
                                <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

                                <div class="relative bg-white" x-show="openM" x-cloak @click.away="openM = false" >
                                    <div class="mx-auto max-w-7xl px-8">
                                        <div class="grid grid-cols-2 gap-x-8 gap-y-10 py-16">
                                            <div class="grid grid-cols-2 grid-rows-1 gap-8 text-sm">
                                                <div class="group aspect-w-1 aspect-h-1 relative overflow-hidden rounded-md bg-gray-100 aspect-w-2 col-span-2">
                                                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-01.jpg" alt="Wooden shelf with gray and olive drab green baseball caps, next to wooden clothes hanger with sweaters." class="object-cover object-center group-hover:opacity-75">
                                                    <div class="flex flex-col justify-end">
                                                    <div class="bg-white bg-opacity-60 p-4 text-sm">
                                                        <a href="#" class="font-medium text-gray-900">
                                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                                        Accessoriess
                                                        </a>
                                                        <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="group aspect-w-1 aspect-h-1 relative overflow-hidden rounded-md bg-gray-100">
                                                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg" alt="Drawstring top with elastic loop closure and textured interior padding." class="object-cover object-center group-hover:opacity-75">
                                                    <div class="flex flex-col justify-end">
                                                    <div class="bg-white bg-opacity-60 p-4 text-sm">
                                                        <a href="#" class="font-medium text-gray-900">
                                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                                        New Arrivals
                                                        </a>
                                                        <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="group aspect-w-1 aspect-h-1 relative overflow-hidden rounded-md bg-gray-100">
                                                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg" alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt." class="object-cover object-center group-hover:opacity-75">
                                                    <div class="flex flex-col justify-end">
                                                    <div class="bg-white bg-opacity-60 p-4 text-sm">
                                                        <a href="#" class="font-medium text-gray-900">
                                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                                        Artwork Tees
                                                        </a>
                                                        <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="grid grid-cols-3 gap-x-8 gap-y-10 text-sm text-gray-500">
                                                <div class="space-y-10">
                                                    <div>
                                                    <p id="men-shoes-heading" class="font-medium text-gray-900">Shoes &amp; Accessories</p>
                                                    <ul role="list" aria-labelledby="men-shoes-heading" class="mt-4 space-y-4">
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Sneakers</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Boots</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Sandals</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Socks</a>
                                                        </li>
                                                    </ul>
                                                    </div>
                                                    <div>
                                                    <p id="men-collection-heading" class="font-medium text-gray-900">Shop Collection</p>
                                                    <ul role="list" aria-labelledby="men-collection-heading" class="mt-4 space-y-4">
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Everything</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Core</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">New Arrivals</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Sale</a>
                                                        </li>
                                                    </ul>
                                                    </div>
                                                </div>
                                                <div class="space-y-10">
                                                    <div>
                                                    <p id="men-clothing-heading" class="font-medium text-gray-900">All Clothing</p>
                                                    <ul role="list" aria-labelledby="men-clothing-heading" class="mt-4 space-y-4">
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Basic Tees</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Artwork Tees</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Pants</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Hoodies</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Swimsuits</a>
                                                        </li>
                                                    </ul>
                                                    </div>
                                                    <div>
                                                    <p id="men-accessories-heading" class="font-medium text-gray-900">All Accessories</p>
                                                    <ul role="list" aria-labelledby="men-accessories-heading" class="mt-4 space-y-4">
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Watches</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Wallets</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Bags</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Sunglasses</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Hats</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Belts</a>
                                                        </li>
                                                    </ul>
                                                    </div>
                                                </div>
                                                <div class="space-y-10">
                                                    <div>
                                                    <p id="men-brands-heading" class="font-medium text-gray-900">Brands</p>
                                                    <ul role="list" aria-labelledby="men-brands-heading" class="mt-4 space-y-4">
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Re-Arranged</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Counterfeit</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">Full Nelson</a>
                                                        </li>
                                                        <li class="flex">
                                                        <a href="#" class="hover:text-gray-800">My Way</a>
                                                        </li>
                                                    </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Company</a>
                        <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Stores</a>
                    </div>
                </div>

                <!-- Logo -->
                <a href="/" wire:navigate class="flex">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                </a>

                <div class="flex flex-1 items-center justify-end">
                    <!-- Search -->
                    <a href="#" class="ml-6 hidden p-2 text-gray-400 hover:text-gray-500 lg:block">
                    <span class="sr-only">Search</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                    </a>

                    <!-- Account -->
                    <a href="#" class="p-2 text-gray-400 hover:text-gray-500 lg:ml-4">
                    <span class="sr-only">Account</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                    </a>

                    <!-- Cart -->
                    <div class="ml-4 flow-root lg:ml-6">
                    <a href="{{ route('cart') }}" wire:navigate class="group -m-2 flex items-center p-2">
                        <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                        <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">
                            <livewire:cart.count />
                        </span>
                        <span class="sr-only">items in cart, view bag</span>
                    </a>
                    </div>
                </div>
                </div>
            </div>
        </nav>
    </header>
    </div>
</div>