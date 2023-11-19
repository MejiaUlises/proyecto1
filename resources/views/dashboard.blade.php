<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('FIELSO2') }}
        </h2>

        <div class="py-12">
            <div class="max-w-7xl mx-auto flex">
                <!-- Panel Lateral -->
                <div class="w-1/4 bg-gray-800 dark:bg-gray-900 p-4">
                    <ul>
                        <li class="mb-2">
                            <a href="{{ route('cotizaciones.index') }}" class="text-white hover:text-gray-300">Cotizaciones</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('clientes.index') }}" class="text-white hover:text-gray-300">Clientes</a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('tipos.index') }}" class="text-white hover:text-gray-300">Tipos</a>
                        </li>
                    </ul>
                </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
