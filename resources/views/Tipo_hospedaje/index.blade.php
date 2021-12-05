<x-app-layout>
    <div class="container py-6">
        <h1> Esta pagina es la de los tipos de Hospedaje</h1>
        <h1 class="text-5xl font-bold text-black-600 text-center my-8">
            Tipos de Hospedaje
        </h1>
        <div class="grid grid-cols-1 gap-6 bg-red-500 p-6 mt-6">
            @foreach ($tipo_hospedaje as $Tipo_hospedaje)
                <article class="w-full h-80 bg-cover bg-center"
                    style="background-image: url(@if($Tipo_hospedaje->image){{Storage::url($Tipo_hospedaje->image->url)}}@else https://cdn.pixabay.com/photo/2016/04/15/11/48/hotel-1330850_960_720.jpg @endif )">
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        <h1 class="text-5xl text-black leading-8 font-bold text-center">
                            <a href="{{ route('tipo_hospedaje.show', $Tipo_hospedaje->id) }}">
                                {{ $Tipo_hospedaje->Tipo_hospedaje }}</a>

                        </h1>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
    {{-- {{$tipo_hospedaje->links()}} --}}
</x-app-layout>
