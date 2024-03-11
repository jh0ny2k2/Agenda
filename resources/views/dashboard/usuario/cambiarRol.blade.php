<x-mi-layout>
        <div class="relative flex flex-col w-96 h-full text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
            <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white rounded-none bg-clip-border">
                <div class="flex items-center justify-between gap-8 mb-8">
                    <div>
                        <h5 class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            {{ __('Modificar Role') }}
                        </h5>
                        <hr class="mt-5">
                        <form method="post" action="/admin/usuario/updateRol/{{ $usuario->id }}" enctype="multipart/form-data">
                        @csrf
                            <div class="grid gap-6 mb-6 md:grid-cols-2">
                                <div>
                                    <label for="rol" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('Role') }}</label>
                                    <select name="rol" id="rol" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                        @if ( $usuario-> rol == 'administrador')
                                            <option value="administrador" selected>Administrador</option>
                                            <option value="creadorEventos">Creador Eventos</option>
                                            <option value="asistente">Asistente</option>
                                        @elseif ( $usuario-> rol == 'creadorEventos')
                                            <option value="administrador">Administrador</option>
                                            <option value="creadorEventos" selected>Creador Eventos</option>
                                            <option value="asistente">Asistente</option>
                                        @else 
                                            <option value="administrador">Administrador</option>
                                            <option value="creadorEventos">Creador Eventos</option>
                                            <option value="asistente" selected>Asistente</option>
                                        @endif
                                    </select>
                                </div>

                                <br>
                            <button type="submit" class="flex items-center justify-between w-full px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">{{ __('Cambiar Rol') }}</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="p-6 px-0 overflow-scroll">
                
            </div>
        </div>
</x-mi-layout>