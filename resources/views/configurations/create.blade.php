<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Configuración de Asistencia') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <form method="POST" action="{{ route('configurations.store') }}">
                    @csrf

                    <div>
                        <x-label for="total_classes" :value="__('Total de Clases')" />
                        <x-input id="total_classes" class="block mt-1 w-full" type="number" name="total_classes" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="percentage_promotion" :value="__('Porcentaje para Promocionar')" />
                        <x-input id="percentage_promotion" class="block mt-1 w-full" type="number" name="percentage_promotion" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="percentage_regular" :value="__('Porcentaje para Regular')" />
                        <x-input id="percentage_regular" class="block mt-1 w-full" type="number" name="percentage_regular" required />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-4">
                            {{ __('Guardar') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
