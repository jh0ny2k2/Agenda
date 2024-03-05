<x-navigation-web>

    <div class="flex items-center justify-center" >
        <img src="{{ asset('storage/evento_' . $evento->id . '.jpg') }}" alt="" class="rounded-md " width="500"/>

    </div>
    
    <div class="flex items-center justify-center ">
    
    <div class="max-w-4xl  bg-white w-full rounded-lg shadow-xl">
        <div class="p-4 grid grid-cols-5 border-b">
            <div class="p-4 col-span-4">
                <h2 class="text-2xl ">
                    Informacion de {{ $evento->nombre }}
                </h2>
                <p class="text-sm text-gray-500 ">
                    {{ $evento->estado }} || {{ $evento-> tipo }}
                </p>
            </div>
                <div class="col-2 flex items-center justify-end ">
                    <a href="">
                        <button type="button" class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800">Inscribirse </button>
                    </a>
                </div>
        </div>
        <div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Nombre
                </p>
                <p>
                    {{ $evento->nombre }}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Fecha
                </p>
                <p>
                    {{ $evento->fecha }} || {{ $evento->hora }}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Direccion
                </p>
                <p>
                    {{ $evento->ciudad }} || {{ $evento->direccion }}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Aforo Maximo
                </p>
                <p>
                    {{ $evento->aforoMax }} Plazas
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Descripcion
                </p>
                <p>
                    {{ $evento->descripcion }} 
                </p>
            </div>
        </div>
    </div>


</div>

    <x-footer>
        
    </x-footer>

</x-navigation-web>