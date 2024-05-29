<x-app-layout>
    <div class="bg-gray-900 text-gray-200 min-h-screen flex items-center justify-center">
        <div class="bg-gray-800 p-8 rounded-lg shadow-md w-full max-w-lg">
            <h1 class="text-2xl font-bold mb-4">Registrar Asistencia</h1>
            <div class="mb-4">
                <h2 class="text-xl font-semibold">Nombre: {{ $student->nombre }} {{ $student->apellido }}</h2>
                <h2 class="text-xl font-semibold">DNI: {{ $student->dni }} - Nacimiento: {{ $student->nacimiento }}</h2>
            </div>
            <form action="{{ route('asissts.store') }}" method="POST" class="space-y-4">
                @csrf
                <input type="hidden" name="student_id" value="{{ $student->id }}">
                <div>
                    <label for="fecha" class="block text-sm font-medium">Fecha:</label>
                    <input type="date" id="fecha" name="fecha" required class="mt-1 p-2 w-full bg-gray-700 border border-gray-600 rounded">
                </div>
                <div class="flex items-center">
                    <input type="checkbox" id="presente" name="presente" value="1" class="mr-2">
                    <label for="presente" class="text-sm font-medium">Presente</label>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded w-full">Registrar</button>
            </form>
        </div>
    </div>
</x-app-layout>

