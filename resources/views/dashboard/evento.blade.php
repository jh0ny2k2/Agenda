<x-mi-layout>
        <div class="relative flex-col text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
            <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white rounded-none bg-clip-border">
                <div class="items-center justify-between gap-8 mb-8">
                    <div>
                        <h5 class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            {{ __('Events List') }}
                        </h5>
                    </div>
                    <div class="mt-4 shrink-0">
                        <a href="{{ route('addEvento') }}">
                            <button class="flex select-none items-center gap-3 rounded-lg bg-gray-900 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" stroke-width="2" class="w-4 h-4">
                                    <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                                    </path>
                                </svg>
                                {{ __('Add event') }}
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-6 px-0 overflow-scroll w80">
                <table class="mt-4">
                    <thead>
                        <tr>
                            <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    {{ __('Name') }}
                                </p>
                            </th>
                            <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    {{ __('Date') }}
                                </p>
                            </th>
                            <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    {{ __('Time') }}
                                </p>
                            </th>
                            <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    {{ __('Description') }}
                                </p>
                            </th>
                            <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    {{ __('City') }}
                                </p>
                            </th>
                            <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    {{ __('Adress') }}
                                </p>
                            </th>
                            <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    {{ __('Status') }}
                                </p>
                            </th>
                            <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    {{ __('Max capacity') }}
                                </p>
                            </th>
                            <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    {{ __('Type') }}
                                </p>
                            </th>
                            <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    {{ __('Max numbers of ticket for person') }}
                                </p>
                            </th>
                            <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    {{ __('Categoria') }}
                                </p>
                            </th>
                            <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    {{ __('Image') }}
                                </p>
                            </th>
                            <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    {{ __('Options') }}
                                </p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($eventos as $evento)
                        <tr>
                            <td class="p-4 border-b border-blue-gray-50">
                                <div class="flex items-center gap-3">
                                    <div class="flex flex-col">
                                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                            {{ $evento -> nombre }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                                <div class="flex flex-col">
                                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                            {{ $evento -> fecha }}
                                        </p>
                                </div>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                                <div class="w-max">
                                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                            {{ $evento -> hora }}
                                        </p>
                                </div>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                            {{ $evento -> descripcion }}
                                        </p>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                            {{ $evento -> ciudad }}
                                        </p>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                            {{ $evento -> direccion }}
                                        </p>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                            {{ $evento -> estado }}
                                        </p>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                            {{ $evento -> aforoMax }}
                                        </p>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                            {{ $evento -> tipo }}
                                        </p>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                            {{ $evento -> numMaxEntradasPorPersona }}
                                        </p>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                            {{ $evento -> categoriaId }}
                                        </p>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                                        <img src="{{ asset('storage/evento_'. $evento->id . '.jpg') }}" width="100">
                            </td>
                            <td class="ml-auto relative p-4 border-b border-blue-gray-50">
                                <div>
                                    <a href="/admin/evento/editar/ {{$evento->id}}"><button type="button" class="bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mb-2"><i class="zmdi zmdi-edit"></i></button></a>
                                </div>
                                <div>
                                    <a class="px-6 py-3 text-center" href="/admin/evento/{{$evento->id}}"><button type="button" class="bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 shadow-lg shadow-red-500/50 dark:shadow-lg dark:shadow-red-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2"><i class="zmdi zmdi-delete"></i></button></a>
                                </div>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</x-mi-layout>