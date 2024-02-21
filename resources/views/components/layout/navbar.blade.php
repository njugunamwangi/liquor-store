  <div x-data="{ open: {}, mobile: false, category: {}, flavor: {}, search: false }" >
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
                        <div class="space-y-10">
                            @foreach($categories as $category)
                                <div>
                                    <div class="flex justify-between">
                                        <p id="women-shoes-heading-mobile" class="font-medium text-gray-900 hover:text-indigo-700">{{ $category->category }}</p>
                                        <svg @click="category['{{ $category->id }}'] = !category['{{ $category->id }}']" class="block h-6 w-6 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path x-show="!category['{{ $category->id }}']" stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                            <path x-show="category['{{ $category->id }}']" stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                        </svg>
                                    </div>
                                    <div x-cloak x-show="category['{{ $category->id }}']" @click.away="category['{{ $category->id }}'] = false">
                                        <ul role="list" aria-labelledby="women-shoes-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                            @foreach($category->flavors()->get() as $flavor)
                                                <li class="flow-root">
                                                    <div class="flex justify-between">
                                                        <a href="#" class="-m-2 block p-2 text-gray-500 hover:text-indigo-700"> {{ $flavor->flavor }} </a>
                                                        <svg @click="flavor['{{ $flavor->id }}'] = !flavor['{{ $flavor->id }}']" class="block h-5 w-5 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                            <path x-show="!flavor['{{ $flavor->id }}']" stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                                            <path x-show="flavor['{{ $flavor->id }}']" stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                                        </svg>
                                                    </div>
                                                    <div x-cloak x-show="flavor['{{ $flavor->id }}']" @click.away="flavor['{{ $flavor->id }}'] = false">
                                                        <ul role="list" aria-labelledby="women-shoes-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                                            @foreach($flavor->brands()->get() as $brand)
                                                                <div class="flex items-center">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                                                                    </svg>

                                                                    <li class="flow-root">
                                                                        <a href="#" class="-m-2 block p-2 text-gray-500 hover:text-indigo-700"> {{ $brand->brand }} </a>
                                                                    </li>
                                                                </div>
                                                            @endforeach
                                                        </ul>
                                                    </div>
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
                                                            src="{{ empty($category->image_id) ? "https://placehold.jp/30/300x150.png?text=image" : url('/storage/'. $category->featuredImage->path) }}"
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
                                                                src="{{ empty($flavor->image_id) ? "https://placehold.jp/30/300x150.png?text=image" : url('/storage/'.$flavor->featuredImage->path) }}"
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
                    <div @click="search = !search" class="ml-6 hidden p-2 text-gray-400 hover:text-gray-500 lg:block">
                        <span class="sr-only">Search</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                        </svg>
                    </div>

                    <!-- Search command palette -->
                    <div x-cloak x-show="search" @click.away="search = false" class="fixed inset-0 z-10 bg-opacity-100 bg-gray-50 w-screen overflow-y-auto p-4 sm:p-6 md:p-20">
                        <!--
                        Command palette, show/hide based on modal state.

                        Entering: "ease-out duration-300"
                            From: "opacity-0 scale-95"
                            To: "opacity-100 scale-100"
                        Leaving: "ease-in duration-200"
                            From: "opacity-100 scale-100"
                            To: "opacity-0 scale-95"
                        -->
                        <div class="mx-auto max-w-3xl transform divide-y divide-gray-100 overflow-hidden rounded-xl bg-white shadow-2xl ring-1 ring-black ring-opacity-5 transition-all">

                            <livewire:search />

                        </div>
                    </div>

                    <!-- Cart -->
                    <div class="ml-4 flow-root lg:ml-6">
                        <a href="{{ route('cart') }}" wire:navigate class="group -m-2 flex items-center p-2">
                            <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                            </svg>
                            <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">
                                <livewire:cart.count />
                            </span>
                            <span class="sr-only">items in cart, view bag</span>
                        </a>
                    </div>

                    <!-- Account -->
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <a href="{{ route('account') }}" wire:navigate class="m-4 text-gray-400 hover:text-gray-500 lg:ml-4">
                            <span class="sr-only">Account</span>
                            <img class="h-8 w-8 rounded-full bg-gray-50"
                                src="{{ Auth::user()->profile_photo_url }}"
                                alt="{{ Auth::user()->name }}"
                            >
                        </a>

                        <form method="POST" action="{{ route('logout') }}" x-data>

                            @csrf

                            <a href="{{ route('logout') }}" @click.prevent="$root.submit();" class="p-2 text-gray-400 hover:text-gray-500 lg:ml-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
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
