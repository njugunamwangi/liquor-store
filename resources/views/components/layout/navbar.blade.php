  <div x-data="{ open: {}, mobile: false }" >
  <!--
    Mobile menu

    Off-canvas menu for mobile, show/hide based on off-canvas menu state.
  -->
    <div class="relative z-40 lg:hidden" x-show="mobile" x-cloak @click.away="mobile = false"  role="dialog" aria-modal="true">
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

        <div class="fixed inset-0 z-40 flex" >
        <!--
            Off-canvas menu, show/hide based on off-canvas menu state.

            Entering: "transition ease-in-out duration-300 transform"
            From: "-translate-x-full"
            To: "translate-x-0"
            Leaving: "transition ease-in-out duration-300 transform"
            From: "translate-x-0"
            To: "-translate-x-full"
        -->
        <div  class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl">
            <div class="flex px-4 pb-2 pt-5">
                <button type="button" @click="mobile = !mobile" class="-m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Links -->
            <div class="mt-2">
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
            </div>

            <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                <div class="flow-root">
                    <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
                </div>
                <div class="flow-root">
                    <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Stores</a>
                </div>
            </div>
        </div>
        </div>

    </div>

    <header class="relative bg-white">
        <nav aria-label="Top"  class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="border-b border-gray-200">
                <div class="flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center lg:hidden">
                    <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                    <button type="button" @click="mobile = !mobile" class="-ml-2 rounded-md bg-white p-2 text-gray-400">
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
                        @foreach($categories as $category)
                            <div class="flex">
                                <div class="relative flex">
                                <!-- Item active: "text-indigo-600", Item inactive: "text-gray-700 hover:text-gray-800" -->
                                <button @click="open['{{ $category->id }}'] = !open['{{ $category->id }}']" type="button" class="text-gray-700 hover:text-gray-800 relative z-10 flex items-center justify-center text-sm font-medium transition-colors duration-200 ease-out" aria-expanded="false">
                                    {{ $category->category }}
                                    <!-- Open: "bg-indigo-600", Closed: "" -->
                                    <span class="absolute inset-x-0 bottom-0 h-0.5 transition-colors duration-200 ease-out sm:mt-5 sm:translate-y-px sm:transform" aria-hidden="true"></span>
                                </button>
                                </div>

                                <!--
                                flyout menu, show/hide based on flyout menu state.

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

                                    <div class="relative bg-white" x-cloak x-show="open['{{ $category->id }}']" @click.away="open['{{ $category->id }}'] = false" >
                                        <div class="mx-auto max-w-7xl px-8">
                                            <div class="grid grid-cols-2 gap-x-8 gap-y-10 py-16">
                                                <div class="grid grid-cols-2 grid-rows-1 gap-8 text-sm">
                                                    <div class="group aspect-w-1 aspect-h-1 relative overflow-hidden rounded-md bg-gray-100 aspect-w-2 col-span-2">
                                                        <img
                                                            src="{{ url('/storage/'.$category->featuredImage->path) }}"
                                                            alt="{{ $category->category }}"
                                                            class="object-cover object-center group-hover:opacity-75">
                                                        <div class="flex flex-col justify-end">
                                                            <div class="bg-white bg-opacity-60 p-4 text-sm">
                                                                <a href="#" class="font-medium text-gray-900">
                                                                <span class="absolute inset-0" aria-hidden="true"></span>
                                                                    {{ $category->category }}
                                                                </a>
                                                                <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @foreach($category->flavors()->inRandomOrder()->limit(2)->get() as $flavor)
                                                        <div class="group aspect-w-1 aspect-h-1 relative overflow-hidden rounded-md bg-gray-100">
                                                            <img
                                                                src="{{ url('/storage/'.$flavor->featuredImage->path) }}"
                                                                alt="{{ $flavor->flavor }}"
                                                                class="object-cover object-center group-hover:opacity-75">
                                                            <div class="flex flex-col justify-end">
                                                                <div class="bg-white bg-opacity-60 p-4 text-sm">
                                                                    <a href="#" class="font-medium text-gray-900">
                                                                        <span class="absolute inset-0" aria-hidden="true"></span>
                                                                        {{ $flavor->flavor }}
                                                                    </a>
                                                                    <p aria-hidden="true" class="mt-0.5 text-gray-700 sm:mt-1">Shop now</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="grid grid-cols-3 gap-x-8 gap-y-10 text-sm text-gray-500">
                                                    @foreach($category->flavors()->get() as $flavor)
                                                    <div class="space-y-10">
                                                        <div>
                                                        <p id="women-brands-heading" class="font-medium text-gray-900">
                                                            {{ $flavor->flavor }}
                                                        </p>
                                                        <ul role="list" aria-labelledby="women-brands-heading" class="mt-4 space-y-4">
                                                            @foreach($flavor->brands()->inRandomOrder()->limit(5)->get() as $brand)
                                                            <li class="flex">
                                                                <a href="#" class="hover:text-gray-800">
                                                                    {{ $brand->brand }}
                                                                </a>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    <!-- <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Company</a> -->
                    <!-- <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Stores</a> -->
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

                    <!-- Account -->
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <a href="{{ route('orders') }}" wire:navigate class="m-4 text-gray-400 hover:text-gray-500 lg:ml-4">
                            <span class="sr-only">Account</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                        </a>

                        <form method="POST" action="{{ route('logout') }}" x-data>

                            @csrf

                            <a href="{{ route('logout') }}" @click.prevent="$root.submit();" class="p-2 text-gray-400 hover:text-gray-500 lg:ml-4">
                                <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 256 256" xml:space="preserve">
                                    <defs>
                                    </defs>
                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                        <path d="M 69.88 53.615 c -0.198 0 -0.399 -0.059 -0.574 -0.182 c -0.451 -0.317 -0.561 -0.941 -0.243 -1.394 l 10.775 -15.335 L 69.063 21.369 c -0.317 -0.452 -0.208 -1.075 0.243 -1.393 c 0.452 -0.317 1.077 -0.208 1.394 0.244 l 11.18 15.911 c 0.242 0.345 0.242 0.805 0 1.149 L 70.699 53.19 C 70.505 53.467 70.194 53.615 69.88 53.615 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 57.988 73.41 H 40.677 c -0.552 0 -1 -0.447 -1 -1 s 0.448 -1 1 -1 h 16.312 V 45 c 0 -0.552 0.447 -1 1 -1 s 1 0.448 1 1 v 27.41 C 58.988 72.963 58.541 73.41 57.988 73.41 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 57.988 0 H 8.939 c -0.004 0 -0.007 0.002 -0.01 0.002 C 8.812 0.003 8.698 0.029 8.587 0.071 c -0.026 0.01 -0.051 0.021 -0.076 0.034 c -0.03 0.014 -0.062 0.023 -0.09 0.04 C 8.358 0.182 8.304 0.23 8.252 0.279 C 8.245 0.286 8.235 0.291 8.228 0.298 C 8.148 0.38 8.088 0.475 8.04 0.578 c -0.012 0.025 -0.021 0.05 -0.031 0.076 C 7.968 0.764 7.939 0.879 7.939 1 v 71.41 c 0 0.121 0.029 0.236 0.07 0.345 c 0.011 0.03 0.024 0.058 0.038 0.087 c 0.042 0.088 0.096 0.168 0.162 0.24 c 0.013 0.014 0.021 0.03 0.034 0.042 c 0.069 0.067 0.146 0.126 0.233 0.171 l 31.738 16.59 C 40.359 89.962 40.518 90 40.677 90 c 0.18 0 0.359 -0.049 0.518 -0.145 c 0.299 -0.182 0.482 -0.506 0.482 -0.855 V 17.59 c 0 -0.372 -0.207 -0.714 -0.537 -0.886 L 13.011 2 h 43.978 v 25.698 c 0 0.552 0.447 1 1 1 s 1 -0.448 1 -1 V 1 C 58.988 0.448 58.541 0 57.988 0 z M 39.677 87.349 L 9.939 71.805 V 2.651 l 29.738 15.545 V 87.349 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path d="M 81.061 37.705 H 47.596 c -0.553 0 -1 -0.448 -1 -1 s 0.447 -1 1 -1 h 33.465 c 0.553 0 1 0.448 1 1 S 81.613 37.705 81.061 37.705 z" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    </g>
                                </svg>
                            </a>
                        </form>
                    @else
                        <a href="{{ route('login') }}" wire:navigate class="p-2 text-gray-400 hover:text-gray-500 lg:ml-4">
                            <span class="sr-only">Account</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                        </a>
                    @endif


                </div>
                </div>
            </div>
        </nav>
    </header>
</div>
