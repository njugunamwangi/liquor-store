<x-app-layout>

    @if(\App\Models\Product::query()->where('status', 1)->count() >= 1)

        <x-home.new-arrival></x-home.new-arrival>

        <x-home.shop-by-flavor></x-home.shop-by-flavor>

        <x-home.shop-by-brand></x-home.shop-by-brand>

    @else

        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-4 lg:max-w-7xl lg:px-8">
            <h2 class="text-xl text-center font-bold text-gray-900">No products</h2>
        </div>

    @endif

</x-app-layout>
