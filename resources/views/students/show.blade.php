<x-app-layout>
    <div class="flex justify-center mt-3">
        <div class="w-full md:w-2/3 lg:w-1/2">
    
            <div class="bg-gray-800 shadow-md rounded-lg">
                <div class="bg-gray-700 px-4 py-2 flex justify-between items-center rounded-t-lg">
                    <div class="text-lg font-semibold text-white">
                        Students Information
                    </div>
                    <div>
                        <a href="{{ route('students.index') }}" class="bg-blue-500 text-white py-1 px-2 rounded text-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="p-4">
    
                    <div class="flex mb-4">
                        <label for="id" class="w-1/3 font-bold text-gray-400 text-right pr-2"><strong>id:</strong></label>
                        <div class="w-2/3 text-gray-300" style="line-height: 35px;">
                            {{ $students->id }}
                        </div>
                    </div>
                    <div class="flex mb-4">
                        <label for="dni" class="w-1/3 font-bold text-gray-400 text-right pr-2"><strong>dni:</strong></label>
                        <div class="w-2/3 text-gray-300" style="line-height: 35px;">
                            {{ $students->dni }}
                        </div>
                    </div>
    
                    <div class="flex mb-4">
                        <label for="apellido" class="w-1/3 font-bold text-gray-400 text-right pr-2"><strong>apellido:</strong></label>
                        <div class="w-2/3 text-gray-300" style="line-height: 35px;">
                            {{ $students->apellido }}
                        </div>
                    </div>
    
                    <div class="flex mb-4">
                        <label for="nombre" class="w-1/3 font-bold text-gray-400 text-right pr-2"><strong>nombre:</strong></label>
                        <div class="w-2/3 text-gray-300" style="line-height: 35px;">
                            {{ $students->nombre }}
                        </div>
                    </div>
    
                    <div class="flex mb-4">
                        <label for="nacimiento" class="w-1/3 font-bold text-gray-400 text-right pr-2"><strong>nacimiento:</strong></label>
                        <div class="w-2/3 text-gray-300" style="line-height: 35px;">
                            {{ $students->nacimiento }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>