<x-app-layout>
    <!-- Header Section -->
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <!-- Main Content with full-screen background -->
    <div class="min-h-screen bg-cover bg-center" style="background-image: url('https://i.pinimg.com/736x/c4/23/36/c4233681f7cbe267de46ee92c7271c8d.jpg');">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
            <div class="bg-black bg-opacity-50 p-6 rounded-lg shadow-lg text-white">
                <h3 class="text-2xl font-bold mb-2">
                    {{ __("Selamat Datang, Intann!") }}
                </h3>
                <p class="text-lg">
                    {{ __("Semoga harimu menyenangkan dan produktif.") }}
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
