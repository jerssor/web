<x-app-layout>
    <div class="container py-6">
        <button type="submit">
            <a href="{{ route('hospedaje.index') }}">Volver</a>
        </button>


        <h1 class="text-4xl font-bold text-black-600 text-center my-8">
            {{ $hospedaje->Nombre }}
        </h1>

        <img class="w-full h-80 bg-cover bg-center" style="background-image: url(@if ($hospedaje->image){{ Storage::url($hospedaje->image->url) }}@else https://cdn.pixabay.com/photo/2016/04/15/11/48/hotel-1330850_960_720.jpg @endif )">
        <div class="w-full h-full px-8 flex flex-col justify-center">
        </div>
        <div class="text-base text-blak-500 mt-4     ">
            <h3>{!! $hospedaje->Descripcion !!}</h3>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-1 text-center">
            <div class="col-span-2">
                <h2 class="text-3xl text-right mr-8">{{ $hospedaje->Telefono }}</h2>
                <h2 class="text-3xl text-right mr-8">{{ $hospedaje->Correo }}</h2>
            </div>
        </div>
        <br>
        <div class="container py-8">
            <section>
                <h1 class="text-2xl uppercase font-semibold">
                    Habitaciones en {{ $hospedaje->Nombre }}
                </h1>
                <br>
                @livewire('hospedaje-habitaciones', ['habitacion' => $hospedaje->Habitacion])
            </section>
        </div>

        <hr>
        <br>

        {{-- Servicios --}}
        <div class="grid grid-cols-2  w-full gap-6">


            {{-- Parques --}}
            <div class="grid w-full sm:grid-cols-1 lg:grid-cols-2 gap-6 p-6 mt-6">

                @foreach ($hospedaje->Parques as $parques)

                    {{ $parques->Nombre }}
                    <article class="w-full h-40 bg-cover bg-center"
                        style="background-image: url(https://source.unsplash.com/random)">
                        <div class="w-full h-full px-8 flex flex-col justify-center">
                            <h1 class="text-4xl text-white font-bold">
                                <a href="{{ route('hospedaje.show', $parques) }}">
                                    <h1 class="text-2xl">Parques</h1>
                                    {{ $parques->Nombre }}
                                </a>
                            </h1>
                        </div>
                    </article>
                @endforeach
            </div>


            {{-- Gastronomia --}}

            <div class="grid sm:grid-cols-1 lg:grid-cols-2 gap-6  p-6 mt-6">
                @foreach ($hospedaje->Gastronomias as $gastronomias)
                    <article class="w-full h-40 bg-cover bg-center"
                        style="background-image: url(https://source.unsplash.com/random)">

                        <div class="w-full h-full px-8 flex flex-col justify-center">
                            <h1 class="text-4xl text-white font-bold">
                                <a href="{{ route('hospedaje.show', $gastronomias) }}">
                                    <h1 class="text-2xl">Gastronomia</h1>
                                    {{ $gastronomias->Nombre }}
                                </a>
                            </h1>
                        </div>
                    </article>
                @endforeach
            </div>

            {{-- Historico --}}

            <div class="grid sm:grid-cols-1 lg:grid-cols-2 gap-6 p-6 mt-6">
                @foreach ($hospedaje->Historicos as $historico)
                    <article class="w-full h-40 bg-cover bg-center"
                        style="background-image: url(https://source.unsplash.com/random)">
                        <div class="w-full h-full px-8 flex flex-col justify-center">
                            <h1 class="text-4xl text-white font-bold">
                                <a href="{{ route('hospedaje.show', $historico) }}">
                                    <h1 class="text-2xl">Historicos</h1>
                                    {{ $historico->Nombre }}
                                </a>
                            </h1>
                        </div>
                    </article>
                @endforeach
            </div>

            {{-- Comercial --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6  p-6 mt-6">
                @foreach ($hospedaje->Comerciales as $comercial)
                    <article class="w-full h-40 bg-cover bg-center"
                        style="background-image: url(https://source.unsplash.com/random)">
                        <div class="w-full h-full px-8 flex flex-col justify-center">
                            <h1 class="text-4xl text-white font-bold">
                                <a href="{{ route('hospedaje.show', $comercial) }}">
                                    <h1 class="text-2xl">Comerciales</h1>
                                    {{ $comercial->Nombre }}
                                </a>
                            </h1>
                        </div>
                    </article>
                @endforeach
            </div>


            {{-- No comercial --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 p-6 mt-6">
                @foreach ($hospedaje->No_comerciales as $no_comerciales)
                    <article class="w-full h-40 bg-cover bg-center"
                        style="background-image: url(https://source.unsplash.com/random)">
                        <div class="w-full h-full px-8 flex flex-col justify-center">
                            <h1 class="text-4xl text-white font-bold">
                                <a href="{{ route('hospedaje.show', $no_comerciales) }}">
                                    <h1 class="text-2xl">No_comerciales</h1>
                                    {{ $no_comerciales->Nombre }}
                                </a>
                            </h1>
                        </div>
                    </article>
                @endforeach
            </div>

            {{-- Transporte --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6  p-6 mt-6">
                @foreach ($hospedaje->Transportes as $transportes)
                    <article class="w-full h-40 bg-cover bg-center"
                        style="background-image: url(https://source.unsplash.com/random)">
                        <div class="w-full h-full px-8 flex flex-col justify-center">
                            <h1 class="text-4xl text-white font-bold">
                                <a href="{{ route('hospedaje.show', $transportes) }}">
                                    <h1 class="text-2xl">Transporte</h1>
                                    {{ $transportes->Nombre }}
                                </a>
                            </h1>
                        </div>
                    </article>
                @endforeach
            </div>

            {{-- Agencia de viajes --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6  p-6 mt-6">
                @foreach ($hospedaje->Agencias_viajes as $agencias_viajes)
                    <article class="w-full h-40 bg-cover bg-center"
                        style="background-image: url(https://source.unsplash.com/random)">
                        <div class="w-full h-full px-8 flex flex-col justify-center">
                            <h1 class="text-4xl text-white font-bold">
                                <a href="{{ route('hospedaje.show', $agencias_viajes) }}">
                                    <h1 class="">Agencias de viajes</h1><br>
                                    {{ $agencias_viajes->Nombre }}
                                </a>
                            </h1>
                        </div>
                    </article>
                @endforeach
            </div>

            {{-- Guias turisticos --}}

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6  p-6 mt-6">
                @foreach ($hospedaje->Guias_turisticos as $guias_turisticos)
                    <article class="w-full h-40 bg-cover bg-center"
                        style="background-image: url(https://source.unsplash.com/random)">
                        <div class="w-full h-full px-8 flex flex-col justify-center">
                            <h1 class="text-4xl text-white font-bold">
                                <a href="{{ route('hospedaje.show', $guias_turisticos) }}">
                                    <h1 class="text-2xl">Guias turisticos</h1> <br>
                                    {{ $guias_turisticos->Nombre }}
                                </a>
                            </h1>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
    @push('script')
        <script>
            // Liveware.on('glider', function() {
                new Glider(document.querySelector('.glider'), {
                    slidesToShow: 4.5,
                    slidesToScroll: 5,
                    draggable: true,
                    dots: '.dots',
                    arrows: {
                        prev: '.glider-prev',
                        next: '.glider-next'
                    }
                });
            // });
        </script>
    @endpush
</x-app-layout>
