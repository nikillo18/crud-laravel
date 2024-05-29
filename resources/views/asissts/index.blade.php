<x-app-layout>
    <div class="bg-gray-900 text-gray-200 min-h-screen flex items-center justify-center">
        <div class="bg-gray-800 p-8 rounded-lg shadow-md w-full max-w-lg">
            <h1 class="text-2xl font-bold mb-4">Buscar Estudiante</h1>
            <form action="{{ route('asissts.search') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="dni" class="block text-sm font-medium">DNI:</label>
                    <input type="text" id="dni" name="dni" required class="mt-1 p-2 w-full bg-gray-700 border border-gray-600 rounded">
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded w-full">Buscar</button>
            </form>
            @if (session('error'))
                <p class="mt-4 text-red-400">{{ session('error') }}</p>
            @endif
            <button class="mt-4 bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded w-full">
                <a href="{{ route('students.index') }}">Volver</a>
            </button>
        </div>
    </div>
</x-app-layout>
