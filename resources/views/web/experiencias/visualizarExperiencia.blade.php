<x-navigation-web>

    <div class="flex items-center justify-center" >
        <img src="{{ asset('storage/experiencia' . $experiencia->id . '.jpg') }}" alt="" class="rounded-md " width="500"/>

    </div>
    
    <div class="flex items-center justify-center ">
    
    <div class="max-w-4xl  bg-white w-full rounded-lg shadow-xl">
        <div class="p-4 border-b">
            <h2 class="text-2xl ">
                Informacion de {{ $experiencia->nombre }}
            </h2>
            <p class="text-sm text-gray-500">
                {{ $experiencia->fechaInicio }}
            </p>
        </div>
        <div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Nombre
                </p>
                <p>
                    {{ $experiencia->nombre }}
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Precio
                </p>
                <p>
                    {{ $experiencia->precioPorPersona }} € 
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Descripcion
                </p>
                <p>
                    {{ $experiencia->descripcionLarga }} 
                </p>
            </div>
            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 p-4 border-b">
                <p class="text-gray-600">
                    Link Web
                </p>
                <p>
                    <a href="{{ $experiencia->linkWeb }}">{{ $experiencia->nombre }}</a> 
                </p>
            </div>
        </div>
    </div>

</div>

    <x-footer>
        
    </x-footer>

</x-navigation-web>