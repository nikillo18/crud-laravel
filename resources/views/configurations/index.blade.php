<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Configuraciones de Asistencia') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <a href="{{ route('configurations.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    {{ __('Crear Configuración') }}
                </a>

                <table class="min-w-full bg-white mt-4">
                    <thead>
                        <tr>
                            <th class="py-2">Total de Clases</th>
                            <th class="py-2">Porcentaje para Promocionar</th>
                            <th class="py-2">Porcentaje para Regular</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($configurations as $configuration)
                            <tr>
                                <td class="py-2">{{ $configuration->total_classes }}</td>
                                <td class="py-2">{{ $configuration->percentage_promotion }}%</td>
                                <td class="py-2">{{ $configuration->percentage_regular }}%</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
