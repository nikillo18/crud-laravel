<x-app-layout>
<div class="flex justify-center mt-3">
    <div class="w-full md:w-2/3 lg:w-1/2">

        @if ($message = Session::get('success'))
        <div class="bg-green-900 border border-green-700 text-green-200 px-4 py-3 rounded relative" role="alert">
            {{ $message }}
        </div>
        @endif

        <div class="bg-gray-800 shadow-md rounded-lg overflow-hidden">
            <div class="px-6 py-4 bg-gray-700 border-b border-gray-600">
                <div class="float-left text-gray-300">
                    Edit students
                </div>
                <div class="float-right">
                    <a href="{{ route('students.index') }}" class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded text-sm">&larr; Back</a>
                </div>
                <div class="clear-both"></div>
            </div>
            <div class="px-6 py-4">
                <form action="{{ route('students.update', $students) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-4">
                        <label for="id" class="block text-gray-300 text-sm font-bold mb-2">id</label>
                        <input type="text" class="shadow appearance-none border @error('id') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-900" id="id" name="id" value="{{ $students->id }}">
                        @if ($errors->has('id'))
                        <p class="text-red-500 text-xs italic">{{ $errors->first('id') }}</p>
                        @endif
                    </div>

                    <div class="mb-4">
                        <label for="dni" class="block text-gray-300 text-sm font-bold mb-2">dni</label>
                        <input type="number" class="shadow appearance-none border @error('dni') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-900" id="dni" name="dni" value="{{ old('dni') }}">
                        @if ($errors->has('dni'))
                        <p class="text-red-500 text-xs italic">{{ $errors->first('dni') }}</p>
                        @endif
                    </div>

                    <div class="mb-4">
                        <label for="apellido" class="block text-gray-300 text-sm font-bold mb-2">apellido</label>
                        <input type="text" class="shadow appearance-none border @error('apellido') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-900" id="apellido" name="apellido" value="{{ $students->apellido }}">
                        @if ($errors->has('apellido'))
                        <p class="text-red-500 text-xs italic">{{ $errors->first('apellido') }}</p>
                        @endif
                    </div>

                    <div class="mb-4">
                        <label for="nombre" class="block text-gray-300 text-sm font-bold mb-2">nombre</label>
                        <input type="text" class="shadow appearance-none border @error('nombre') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-900" id="nombre" name="nombre" value="{{ $students->nombre }}">
                        @if ($errors->has('nombre'))
                        <p class="text-red-500 text-xs italic">{{ $errors->first('nombre') }}</p>
                        @endif
                    </div>

                    <div class="mb-4">
                        <label for="nacimiento" class="block text-gray-300 text-sm font-bold mb-2">nacimiento</label>
                        <input type="date" step="0.01" class="shadow appearance-none border @error('nacimiento') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-900" id="nacimiento" name="nacimiento" value="{{ $students->nacimiento}}">
                        @if ($errors->has('nacimiento'))
                        <p class="text-red-500 text-xs italic">{{ $errors->first('nacimiento') }}</p>
                        @endif
                    </div>

                    <div class="mb-4 flex justify-center">
                        <input type="submit" class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded" value="Update">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

</x-app-layout>