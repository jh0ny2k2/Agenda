

    <div class=" mt-11 max-w-sm bg-white rounded-lg shadow dark:bg-gray-800">
        <a href="#">
            <img class="object-cover align-baseline lg:ml-20 w-full h-56 rounded-lg lg:w-64"  src="{{ $imagen }}" alt="" />
        </a>
        <div class="p-5 text-center">
            <a href="#">
                <h5 class="flex flex-col justify-between py-6 lg:mx-6">{{ $titulo }}</h5>
            </a>
            <p class="text-sm text-gray-500 dark:text-gray-300">{{ $descripcion }}</p>
            <button class="ml-12 mt-5 px-6 py-4 bg-green-700 text-white font-semibold text-lg rounded-xl hover:bg-green-900 transition ease-in-out duration-500 grid grid-cols-2">
                {{ $boton }}
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </button>
        </div>
    </div>