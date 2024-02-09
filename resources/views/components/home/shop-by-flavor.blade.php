        <!-- Trending products -->
        <section aria-labelledby="trending-heading" class="bg-gray-100 mt-24">
            <div class="py-16 sm:py-24 lg:mx-auto lg:max-w-7xl lg:px-8 lg:py-32">
                <div class="flex items-center justify-between px-4 sm:px-6 lg:px-0">
                    <h2 id="trending-heading" class="text-2xl font-bold tracking-tight text-gray-900">Shop by Flavors</h2>
                    <a href="#" class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">
                        See everything
                        <span aria-hidden="true"> &rarr;</span>
                    </a>
                </div>

                <div class="relative mt-8">
                    <div class="relative w-full overflow-x-auto">
                        <ul role="list" class="mx-4 inline-flex space-x-8 sm:mx-6 lg:mx-0 lg:grid lg:grid-cols-4 lg:gap-x-8 lg:space-x-0">
                            @foreach($flavors as $flavor )
                                <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                                    <div class="group relative">
                                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200">
                                        <img src="{{ url('/storage/'.$flavor->featuredImage->path) }}" alt="{{ $flavor->flavor }}"
                                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                                    </div>
                                    <div class="mt-6">
                                        <p class="text-sm text-gray-500">
                                            {{ ($flavor->products()->count() > 1 ? $flavor->products()->count() . ' products' : $flavor->products()->count() . ' product') }}
                                        </p>
                                        <h3 class="mt-1 font-semibold text-gray-900">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            {{ $flavor->flavor }}
                                        </a>
                                        </h3>
                                    </div>
                                    </div>
                                </li>
                            @endforeach

                        <!-- More products... -->
                        </ul>
                    </div>
                </div>

                <div class="mt-12 px-4 sm:hidden">
                    <a href="#" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                        See everything
                        <span aria-hidden="true"> &rarr;</span>
                    </a>
                </div>
            </div>
        </section>



