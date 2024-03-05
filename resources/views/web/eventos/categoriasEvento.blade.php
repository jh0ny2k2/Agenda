<x-navigation-web>
    <div class="grid grid-cols-3">
        @foreach ($categorias as $categoria)
        <a href="/web/eventosWeb/{{ $categoria->id }}">
            <article class="bg-gray-200 relative isolate flex items-center justify-center overflow-hidden rounded-2xl p-20 max-w-sm mx-auto mt-24">
                <h3 class="z-10 mt-3 text-3xl font-bold text-zinc-700">{{ $categoria->nombre }}</h3>
            </article>
        </a>
        @endforeach
    </div>
    
    <x-footer>
        
    </x-footer>

</x-navigation-web>