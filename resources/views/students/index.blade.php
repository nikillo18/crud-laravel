<x-app-layout>
    <div class="bg-gray-900">
        <div class="container mx-auto py-8">
            @if ($message = Session::get('success'))
            <div class="bg-green-50 border border-green-300 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ $message }}</span>
            </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between items-center mb-6">
                        <div class="text-xl font-bold text-gray-800">Lista de estudiantes</div>
                        <a href="{{ route('students.create') }}" class="bg-blue-400 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded">
                            <i class="bi bi-plus-circle"></i> Nuevo Estudiante
                        </a>
                    </div>

                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-800 uppercase tracking-wider">DNI</th>
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-800 uppercase tracking-wider">Apellido</th>
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-800 uppercase tracking-wider">Nombre</th>
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-800 uppercase tracking-wider">Nacimiento</th>
                                <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-medium text-gray-800 uppercase tracking-wider">Asistencia</th>
                                <th class="px-6 py-3 bg-gray-200"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($students as $student)
                     
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $student->dni }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $student->apellido }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $student->nombre }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $student->nacimiento }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">{{ $student->asisst }}</td>
                                <td class="px-6 py-4 whitespace-no-wrap">
                                    <div class="flex items-center">
                                        <a href="{{ route('students.show', $student->id) }}" class="text-blue-400 hover:text-blue-500 mr-2">
                                            <i class="bi bi-eye"></i> Ver
                                        </a>
                                        <a href="{{ route('students.edit', $student->id) }}" class="text-yellow-400 hover:text-yellow-500 mr-2">
                                            <i class="bi bi-pencil-square"></i> Editar
                                        </a>
                                        <form action="{{ route('students.destroy', $student->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-400 hover:text-red-500" onclick="return confirm('¿Estás seguro de eliminar este estudiante?');">
                                                <i class="bi bi-trash"></i> Eliminar
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="px-6 py-4 whitespace-no-wrap">
                                    <span class="text-red-400"><strong>No se encontraron estudiantes.</strong></span>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

