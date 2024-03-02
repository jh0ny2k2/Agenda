<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agenda Cultura</title>
        <link rel="stylesheet" href="../../css/tailwind.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" integrity="sha512-7x3zila4t2qNycrtZ31HO0NnJr8kg2VI67YLoRSyi9hGhRN66FHYWr7Axa9Y1J9tGYHVBPqIjSE1ogHrJTz51g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
    </head> 

    <body class="font-body">

        <!-- home section -->
        <section class="bg-white mb-20 md:mb-52 xl:mb-72">

            <div class="container max-w-screen-xl mx-auto px-4">

                <nav class="flex-wrap lg:flex items-center py-14 xl:relative z-10" x-data="{navbarOpen:false}">

                    <div class="flex items-center justify-between mb-10 lg:mb-0">
                        <img src="{{ asset('storage/arezzo.png') }}" alt="Logo img" width="50">
                        <button class="lg:hidden w-10 h-10 ml-auto flex items-center justify-center text-green-700 border border-green-700 rounded-md" @click="navbarOpen = !navbarOpen">
                            <i data-feather="menu"></i>
                        </button>
                    </div>

                    <ul class="lg:flex flex-col lg:flex-row lg:items-center lg:mx-auto lg:space-x-8 xl:space-x-16" :class="{'hidden':!navbarOpen,'flex':navbarOpen}">

                        <li class="font-semibold text-gray-900 text-lg hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                            <a href="#">Eventos</a>
                        </li>
        
                        <li class="font-semibold text-gray-900 text-lg hover:text-gray-400 transition ease-in-out duration-300 mb-5 lg:mb-0">
                            <a href="#">Experiencias</a>
                        </li>
                        <li class="block p-1 font-sans text-sm antialiased font-medium leading-normal text-blue-gray-900">
                        @auth
                            @if (Auth::user()->rol == 'administrador' || Auth::user()->rol == 'creadorEventos')
                                <a href="{{ route('dashboard') }}"
                                    class="px-5 py-3 lg:block border-2 border-green-700 rounded-lg font-semibold text-green-700 text-lg hover:bg-green-700 hover:text-white transition ease-linear duration-500">
                                    {{ __('Dashboard') }}</a>
                            @endif

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                            
                            <a href="{{ route('logout') }}">
                                <button class="px-5 py-3 lg:block border-2 border-green-700 rounded-lg font-semibold text-green-700 text-lg hover:bg-green-700 hover:text-white transition ease-linear duration-500">{{ __('Log out') }}</button>
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="px-5 py-3 lg:block border-2 border-green-700 rounded-lg font-semibold text-green-700 text-lg hover:bg-green-700 hover:text-white transition ease-linear duration-500">
                                {{ __('Log in') }}</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="px-5 py-3 lg:block border-2 border-green-700 rounded-lg font-semibold text-green-700 text-lg hover:bg-green-700 hover:text-white transition ease-linear duration-500">
                                    {{ __('Register') }}</a>
                            @endif
                        @endauth

                    </ul>

            </div>

    <main class="h-full overflow-y-auto">
        <div class="container px-6 mx-auto grid">
                    
            {{ $slot }}

        </div>
    </main>

    </div>
</body>
</html>