<x-app-layout>
    <div class="container mx-auto mt-4">
        <form action="{{ route('asissts.by_date') }}" method="GET">
            <div class="flex items-center justify-center mb-4">
                <label for="date" class="mr-2 text-gray-700">Selecciona una fecha:</label>
                <input type="date" id="date" name="date" class="form-input rounded-md shadow-sm pl-2 pr-2 py-1 text-blue-500" required>
                <button type="submit" class="ml-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ver Asistencias</button>
            </div>
        </form>

        @if(isset($students))
            <div class="mt-4">
                <h2 class="text-lg text-blue-500 mb-2">Lista de estudiantes que asistieron el {{ request('date') }}:</h2>
                <ul class="list-none mb-0">
                    @forelse ($students as $student)
                        <li class="py-2 border-b border-gray-200">
                            <span class="text-blue-500">{{ $student->apellido }},</span>
                            <span class="text-blue-500">{{ $student->nombre }}</span>
                        </li>
                    @empty
                        <li class="text-gray-500">No hay estudiantes que asistieron en esta fecha.</li>
                    @endforelse
                </ul>
            </div>
        @endif
    </div>
</x-app-layout>