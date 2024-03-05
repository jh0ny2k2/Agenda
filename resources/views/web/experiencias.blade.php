<x-navigation-web>
    <div class="grid grid-cols-3">
        @foreach ($experiencias as $experiencia)
        <x-cards>
            <x-slot name="titulo">
                {{ $experiencia -> nombre}}
            </x-slot>

            <x-slot name="imagen">
                {{ asset('storage/experiencia_' . $experiencia->id . '.jpg') }}
            </x-slot>

            <x-slot name="descripcion">
                {{ $experiencia -> descripcionCorta }}
            </x-slot>
            
            <x-slot name="boton">
                <a class="text-center" href="/web/verExperiencia/{{ $experiencia->id }}">Ver Experiencia</a>
            </x-slot>
        </x-cards>
        @endforeach
    </div>

    <x-footer>
        
    </x-footer>

</x-navigation-web>