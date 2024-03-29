        <!-- Trending products -->
        <section aria-labelledby="trending-heading" class="bg-gray-100 mt-24">
            <div class="py-16 sm:py-24 lg:mx-auto lg:max-w-7xl lg:px-8 lg:py-32">
                <div class="flex items-center justify-between px-4 sm:px-6 lg:px-0">
                    <h2 id="trending-heading" class="text-2xl font-bold tracking-tight text-gray-900">Shop by Flavors</h2>
                    <a href="{{ route('flavors') }}" wire:navigate class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">
                        See everything
                        <span aria-hidden="true"> &rarr;</span>
                    </a>
                </div>

                <div class="relative mt-8">
                    <div class="relative w-full overflow-x-auto">
                        <ul role="list" class="mt-8 grid sm:p-4 grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                            @foreach($flavors as $flavor )
                                <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                                    <div class="group relative">
                                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200">
                                        <img src="{{ empty($flavor->featured_image_id) ? "https://placehold.co/600x400?text=".$flavor->flavor : url('/storage/'. $flavor->featuredImage->path) }}" alt="{{ $flavor->flavor }}"
                                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                                    </div>
                                    <div class="mt-6">
                                        <p class="text-sm text-gray-500">
                                            {{ ($flavor->products()->count() > 1 ? $flavor->products()->count() . ' products' : $flavor->products()->count() . ' product') }}
                                        </p>
                                        <h3 class="mt-1 font-semibold text-gray-900">
                                        <a href="{{ route('flavor', $flavor) }}" wire:navigate>
                                            <span class="absolute inset-0"></span>
                                            {{ $flavor->flavor }}
                                        </a>
                                        </h3>
                                    </div>
                                    </div>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>

                <div class="mt-12 px-4 sm:hidden">
                    <a href="{{ route('flavors') }}" wire:navigate class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                        See everything
                        <span aria-hidden="true"> &rarr;</span>
                    </a>
                </div>
            </div>
        </section>



