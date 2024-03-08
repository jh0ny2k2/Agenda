<x-mi-layout>
        <div class="relative flex flex-col w-96 h-full text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
            <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white rounded-none bg-clip-border">
                <div class="flex items-center justify-between gap-8 mb-8">
                    <div>
                        <h5 class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            {{ __('Lista de inscritos') }}
                        </h5>
                        <hr class="mt-5">
                        <div class="mt-5 grid grid-cols-2">
                            @foreach ($usuarios as $usuario) 
                                <p> {{ $usuario->nombre }} </p>
                                <a href="/admin/evento/borrarInscripcion/{{$usuario->id}}/{{$evento->id}}"><button>x</button></a>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="p-6 px-0 overflow-scroll">
                
            </div>
        </div>
</x-mi-layout>