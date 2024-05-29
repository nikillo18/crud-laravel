<x-app-layout>
<div class="flex justify-center mt-3">
    <div class="w-full md:w-2/3 lg:w-1/2">
        <div class="bg-gray-800 shadow-md rounded-lg overflow-hidden">
            <div class="bg-gray-700 text-gray-200 px-6 py-4 border-b border-gray-600 flex justify-between items-center">
                <div>
                    Add New students
                </div>
                <div>
                    <a href="{{ route('students.index') }}" class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded text-sm">&larr; Back</a>
                </div>
            </div>
            <div class="px-6 py-4">
                <form action="{{ route('students.store') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="id" class="block text-gray-300 mb-2">id</label>
                        <input type="number" class="bg-gray-700 text-white border border-gray-600 rounded w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-600 @error('id') border-red-500 @enderror" id="id" name="id" value="{{ old('id') }}">
                        @if ($errors->has('id'))
                        <span class="text-red-500 text-sm">{{ $errors->first('id') }}</span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label for="dni" class="block text-gray-300 mb-2">dni</label>
                        <input type="number" class="bg-gray-700 text-white border border-gray-600 rounded w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-600 @error('dni') border-red-500 @enderror" id="dni" name="dni" value="{{ old('dni') }}">
                        @if ($errors->has('dni'))
                        <span class="text-red-500 text-sm">{{ $errors->first('dni') }}</span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label for="apellido" class="block text-gray-300 mb-2">apellido</label>
                        <input type="text" class="bg-gray-700 text-white border border-gray-600 rounded w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-600 @error('apellido') border-red-500 @enderror" id="apellido" name="apellido" value="{{ old('apellido') }}">
                        @if ($errors->has('apellido'))
                        <span class="text-red-500 text-sm">{{ $errors->first('apellido') }}</span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label for="nombre" class="block text-gray-300 mb-2">nombre</label>
                        <input type="text" class="bg-gray-700 text-white border border-gray-600 rounded w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-600 @error('nombre') border-red-500 @enderror" id="nombre" name="nombre" value="{{ old('nombre') }}">
                        @if ($errors->has('nombre'))
                        <span class="text-red-500 text-sm">{{ $errors->first('nombre') }}</span>
                        @endif
                    </div>
                    <div class="mb-4">
                        <label for="nacimiento" class="block text-gray-300 mb-2">nacimiento</label>
                        <input type="date" step="0.01" class="bg-gray-700 text-white border border-gray-600 rounded w-full py-2 px-3 focus:outline-none focus:ring-2 focus:ring-blue-600 @error('nacimiento') border-red-500 @enderror" id="nacimiento" name="nacimiento" value="{{ old('nacimiento') }}">
                        @if ($errors->has('nacimiento'))
                        <span class="text-red-500 text-sm">{{ $errors->first('nacimiento') }}</span>
                        @endif
                    </div>
                    <div class="flex justify-center">
                        <input type="submit" class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded" value="Add students">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<<<<<<< HEAD
@endsection
<x-app-layout>
=======
</x-app-layout>
>>>>>>> 6eb0cd318693d8abdb2311be7d04d3b28e4204ff
