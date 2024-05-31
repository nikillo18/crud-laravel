<x-app-layout>
<div ss="flex justify-center mt-3">
    <div class="w-full md:w-2/3 lg:w-1/2">
        @if ($message = Session::get('success'))
        <div class="bg-green-900 text-green-200 border border-green-700 p-4 rounded mb-4" role="alert">
            {{ $message }}
        </div>
        @endif

        <div class="bg-gray-800 shadow-md rounded-lg overflow-hidden mb-4">
            <div class="bg-gray-700 text-gray-200 px-6 py-4 border-b border-gray-600">
                Lista de estudiantes
            </div>
            <div class="px-6 py-4">
                <a href="{{ route('students.create') }}" class="text-blue-400 hover:text-blue-600"><i class="bi bi-plus-circle"></i> New Student</a>
            </div>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="table-auto w-full bg-gray-900 text-white border border-gray-700">
            <thead class="bg-gray-700 text-gray-300">
                <tr class="text-center">
                  {{--  <th class="border border-gray-800 px-4 py-2">ID</th>--}}
                    <th class="border border-gray-800 px-4 py-2">DNI</th>
                    <th class="border border-gray-800 px-4 py-2">Apellido</th>
                    <th class="border border-gray-800 px-4 py-2">Nombre</th>
                    <th class="border border-gray-800 px-4 py-2">Nacimiento</th>
                    <th class="border border-gray-800 px-4 py-2">Asisst</th>
                    <th class="border border-gray-800 px-4 py-2">Acción</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)
                <tr class="text-center">
                    {{--<td class="border border-gray-800 px-4 py-2">{{$student->id}}</td>--}}
                    <td class="border border-gray-800 px-4 py-2">{{$student->dni}}</td>
                    <td class="border border-gray-800 px-4 py-2">{{$student->apellido}}</td>
                    <td class="border border-gray-800 px-4 py-2">{{$student->nombre}}</td>
                    <td class="border border-gray-800 px-4 py-2">{{$student->nacimiento}}</td>
                    <td class="border border-gray-800 px-4 py-2">{{$student->asisst}}</td>
                    <td class="border border-gray-800 px-4 py-2">
                        <form action="{{ route('students.destroy', $student->id) }}" method="post" class="flex justify-center items-center space-x-2">
                            @csrf
                            @method('DELETE')

                            <a title="{{__('Mostrar')}}" href="{{ route('students.show', $student->id) }}" class="text-blue-400 hover:text-blue-600"><i class="bi bi-eye"></i></a>
                            <a title="{{__('Editar')}}" href="{{ route('students.edit', $student) }}" class="text-yellow-400 hover:text-yellow-600"><i class="bi bi-pencil-square"></i></a>
                            <button title="{{__('Eliminar')}}" type="submit" class="text-red-400 hover:text-red-600" onclick="return confirm('Do you want to delete this student?');"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center border border-gray-800 px-4 py-2">
                        <span class="text-gray-500">
                            <strong>No students Found!</strong>
                        </span>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
<
</x-app-layout>
