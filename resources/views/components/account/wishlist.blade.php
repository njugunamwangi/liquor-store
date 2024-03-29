<x-account-layout :title="$title">
        <!--
    This example requires updating your template:

    ```
    <html class="h-full bg-white">
    <body class="h-full">
    ```
    -->
    <div>
        <x-account.side-bar />

        <main class="py-10 lg:pl-72">
            <div class="bg-white py-6 sm:py-8 lg:py-12">
                <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                    <!-- text - start -->
                    <div class="mb-10 md:mb-16">
                        <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Wishlist</h2>
                    </div>
                    <!-- text - end -->

                    <livewire:wishlist.show />
                </div>
            </div>
        </main>
    </div>

</x-account-layout>