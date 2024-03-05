<x-navigation-web>
    <div class="grid grid-cols-3">
        @foreach ($eventos as $evento)
        <x-cards>
            <x-slot name="titulo">
                {{ $evento -> nombre}}
            </x-slot>

            <x-slot name="imagen">
                {{ asset('storage/evento_' . $evento->id . '.jpg') }}
            </x-slot>

            <x-slot name="descripcion">
                {{ $evento -> descripcion }}
            </x-slot>
            
            <x-slot name="boton">
                <a class="text-center " href="/web/verEvento/{{ $evento -> id}}">Ver Evento</a>
            </x-slot>
        </x-cards>
        @endforeach
    </div>

    <x-footer>
        
    </x-footer>

</x-navigation-web>