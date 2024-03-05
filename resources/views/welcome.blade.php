<x-nav-web>

    <section class="bg-white py-10 md:py-16 xl:relative mt-52">

    <div class="container max-w-screen-xl mx-auto px-4 ">

        <div class="flex flex-col xl:flex-row justify-end">

            <div class="hidden xl:block xl:absolute left-0 bottom-0 w-full mr-28">
                <img src="{{ asset('storage/54.png') }}" alt="Feature img">
            </div>

            <div class="ml-28">

                <h1 class="font-semibold text-gray-900 text-xl md:text-4xl text-center leading-normal mb-6">Explora una Multitud de Eventos <br> y Experiencias Únicas</h1>

                <p class="font-normal text-gray-400 text-md md:text-xl text-center mb-16">Sumérgete en un mundo de posibilidades y aventuras con nuestra amplia <br> selección de eventos y experiencias. Desde emocionantes conciertos <br> y festivales culturales hasta escapadas relajantes en la naturaleza,  <br>nuestro catálogo diverso ofrece algo para todos los gustos y preferencias.</p>

                <div class="flex flex-col md:flex-row justify-center xl:justify-start space-x-4 mb-20">
                    <div class="px-8 h-20 mx-auto md:mx-0 bg-gray-200 rounded-lg flex items-center justify-center mb-5 md:mb-0">
                        <i class="zmdi zmdi-archive zmdi-hc-2x"></i>
                    </div>
                    
                    <div class="text-center md:text-left">
                        <h4 class="font-semibold text-gray-900 text-2xl mb-2">Amplia Diversidad</h4>
                        <p class="font-normal text-gray-400 text-xl leading-relaxed">Ofreciendo una amplia gama de eventos y <br>  experiencias para satisfacer diversos intereses y gustos. </p>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row justify-center xl:justify-start space-x-4 mb-20">
                    <div class="px-8 h-20 mx-auto md:mx-0 bg-gray-200 rounded-lg flex items-center justify-center mb-5 md:mb-0">
                        <i class="zmdi zmdi-archive zmdi-hc-2x"></i>
                    </div>

                    <div class="text-center md:text-left">
                        <h4 class="font-semibold text-gray-900 text-2xl mb-2">Facilidad de Reserva y Acceso</h4>
                        <p class="font-normal text-gray-400 text-xl leading-relaxed">Proporcionar a los usuarios una experiencia fluida <br> y sin complicaciones </p>
                    </div>
                </div>

                <div class="flex flex-col md:flex-row justify-center xl:justify-start space-x-4">
                    <div class="px-8 h-20 mx-auto md:mx-0 bg-gray-200 rounded-lg flex items-center justify-center mb-5 md:mb-0">
                        <i class="zmdi zmdi-archive zmdi-hc-2x"></i>
                    </div>

                    <div class="text-center md:text-left">
                        <h4 class="font-semibold text-gray-900 text-2xl mb-2">Integración Social y Comunidad Activa</h4>
                        <p class="font-normal text-gray-400 text-xl leading-relaxed">Facilitando la interacción social entre los usuarios  <br> al permitirles compartir sus experiencias,</p>
                    </div>
                </div>

            </div>

        </div>

    </div> 
    
    </section>

    <h1 class="text-2xl md:text-3xl pl-2 my-2 border-l-4  font-sans font-bold border-teal-400  dark:text-gray-200">Eventos</h1>
    
    <div class="grid grid-cols-4 gap-4 text-center">

        

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
                <a class="text-center" href="/web/verEvento/{{ $evento -> id}}">Ver Evento</a>
            </x-slot>
        </x-cards>
        @endforeach
    </div>

    <x-footer>
        
    </x-footer>

</x-nav-web>