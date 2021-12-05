<x-app-layout>

    <div class="container py-6">
        <h1>Esta pagina es para mostrar Descripción tipo de Hospedaje</h1>
        <h1 class="text-5xl font-bold text-black-600 text-center my-8">
            {{ $tipo_hospedaje->Tipo_hospedaje }}
        </h1>
        <p class="text-2xl">{{ $tipo_hospedaje->Descripcion }}</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6  p-6 mt-6">
            @foreach ($hospedaje as $hospedaje)
                <article class="w-full h-80 bg-cover bg-center"
                    style="background-image: url(@if($hospedaje->image){{Storage::url($hospedaje->image->url)}}@else https://cdn.pixabay.com/photo/2016/04/15/11/48/hotel-1330850_960_720.jpg @endif )">
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        <h1 class="text-5xl text-black  font-bold">
                            <a href="{{ route('hospedaje.show', $hospedaje) }}">
                                {{ $hospedaje->Nombre }}
                            </a>
                        </h1>
                    </div>
                </article>
            @endforeach
        </div>
    </div>

    {{-- <div class="mt-4">
        {{$tipo_hospedaje->links()}}
    </div> --}}
</x-app-layout>
