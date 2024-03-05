
    <div class=" mt-11 max-w-sm bg-white rounded-lg shadow dark:bg-gray-800">
        <a href="#">
            <img class="rounded-t-lg w-52 h-52 align-baseline ml-20"  src="{{ $imagen }}" alt="" />
        </a>
        <div class="p-5 text-center">
            <a href="#">
                <h5 class="mb-2 text-center
                 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $titulo }}</h5>
            </a>
            <p class="mb-3 text-center font-normal text-gray-700 dark:text-gray-400 ">{{ $descripcion }}</p>
            <button class="ml-12 px-6 py-4 bg-green-700 text-white font-semibold text-lg rounded-xl hover:bg-green-900 transition ease-in-out duration-500 grid grid-cols-2">
                {{ $boton }}
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2 mt-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </button>
        </div>
    </div>

