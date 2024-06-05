<x-app-layout>
    <div class="flex justify-center mt-3">
        <div class="w-full md:w-2/3 lg:w-1/2">
            <div class="bg-gray-800 shadow-md rounded-lg overflow-hidden">
                <div class="px-6 py-4 bg-gray-700 border-b border-gray-600">
                    <div class="float-left text-gray-300">
                        Students Information
                    </div>
                    <div class="float-right">
                        <a href="{{ route('students.index') }}" class="bg-blue-700 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded text-sm">&larr; Back</a>
                    </div>
                    <div class="clear-both"></div>
                </div>
                <div class="px-6 py-4">
                    <div class="flex mb-4">
                        <label for="id" class="w-1/3 text-gray-300 text-sm font-bold text-right pr-4"><strong>id:</strong></label>
                        <div class="w-2/3 text-gray-300">
                            {{ $students->id }}
                        </div>
                    </div>
    
                    <div class="flex mb-4">
                        <label for="dni" class="w-1/3 text-gray-300 text-sm font-bold text-right pr-4"><strong>dni:</strong></label>
                        <div class="w-2/3 text-gray-300">
                            {{ $students->dni }}
                        </div>
                    </div>
    
                    <div class="flex mb-4">
                        <label for="apellido" class="w-1/3 text-gray-300 text-sm font-bold text-right pr-4"><strong>apellido:</strong></label>
                        <div class="w-2/3 text-gray-300">
                            {{ $students->apellido }}
                        </div>
                    </div>
    
                    <div class="flex mb-4">
                        <label for="nombre" class="w-1/3 text-gray-300 text-sm font-bold text-right pr-4"><strong>nombre:</strong></label>
                        <div class="w-2/3 text-gray-300">
                            {{ $students->nombre }}
                        </div>
                    </div>
    
                    <div class="flex mb-4">
                        <label for="nacimiento" class="w-1/3 text-gray-300 text-sm font-bold text-right pr-4"><strong>nacimiento:</strong></label>
                        <div class="w-2/3 text-gray-300">
                            {{ $students->nacimiento }}
                        </div>
                    </div>
    
                    <div class="flex mb-4">
                        <label for="condicion" class="w-1/3 text-gray-300 text-sm font-bold text-right pr-4"><strong>condicion:</strong></label>
                        <div class="w-2/3 text-gray-300">
                            {{ $students->calculateStatus() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </x-app-layout>
    