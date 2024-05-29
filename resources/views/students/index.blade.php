<x-app-layout>
<div class="">
    <div class="">
        @if ($message = Session::get('success'))
        <div class="" role="alert">
            {{ $message }}
        </div>
        @endif
        <div class="">
            <div class="card-header">Lista de estudiantes</div>
            <div class="card-body">
                <a href="{{ route('students.create') }}" class=""><i class="bi bi-plus-circle"></i> new students</a>
                

              

            </div>
        </div>
    </div>
</div>

<table class="table-auto w-full bg-black text-white border border-gray-300">
    <thead class="bg-blue-900 text-white"   >
        <tr class="text-center">
            <th class="border border-gray-800 px-4 py-2">id</th>
            <th class="border border-gray-800 px-4 py-2">dni</th>
            <th class="border border-gray-800 px-4 py-2">apellido</th>
            <th class="border border-gray-800 px-4 py-2">nombre</th>
            <th class="border border-gray-800 px-4 py-2">nacimiento</th>
            <th class="border border-gray-800 px-4 py-2">asisst</th>
             <th class="border border-gray-800 px-4 py-2">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($students as $students)
        <tr>
            
            <td class="border border-gray-800 px-4 py-2">{{$students->id}}</td>
            <td class="border border-gray-800 px-4 py-2">{{$students->dni}}</td>
            <td class="border border-gray-800 px-4 py-2">{{$students->apellido}}</td>
            <td class="border border-gray-800 px-4 py-2">{{$students->nombre}}</td>
            <td class="border border-gray-800 px-4 py-2">{{$students->nacimiento}}</td>
            <td class="border border-gray-800 px-4 py-2">{{$students->asisst}}</td>
            
            <td>
                <form action="{{ route('students.destroy', $students->id) }}" method="post">
                    @csrf
                    @method('DELETE')

                    <a title="{{__('Mostrar')}}" href="{{ route('students.show', $students->id) }}" class="p-3 outline-none border-1 border-r-2 border-white"><i class="bi bi-eye"></i></a>
                    
                    <a title="{{__('Editar')}}" href="{{ route('students.edit', $students) }}" class=""><i class="bi bi-pencil-square"></i></a>

                    <button title="{{__('Eliminar')}}" type="submit" class="" onclick="return confirm('Do you want to delete this students?');"><i class="bi bi-trash"></i></button>
                </form>
            </td>
        </tr>
        @empty
        <td colspan="6">
            <span class="">
                <strong>No students Found!</strong>
            </span>
        </td>
        @endforelse
    </tbody>
</table>
</x-app-layout>