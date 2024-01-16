<x-app-layout :title="$title">
    <div class="bg-white">
        <div class="mx-auto max-w-7xl px-4 pb-16 pt-4 sm:px-6 sm:pb-24 sm:pt-8 lg:px-8 xl:px-2 xl:pt-14">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mb-8 mx-6">{{ $title }}</h1>

            <livewire:checkout />
        </div>
    </div>
</x-app-layout>
