<x-app-layout>
    <div class="container py-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
            @foreach ($hospedaje as $Hospedaje)
                <article class="w-full h-80 bg-cover bg-center bg-white shadow-lg rounded-lg"
                    style="background-image: url(@if($Hospedaje-image ){{ Storage::url($Hospedaje->image->url) }}@else https://cdn.pixabay.com/photo/2016/04/15/11/48/hotel-1330850_960_720.jpg @endif)">
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        <h1 class="text-5xl text-white leading-8 font-bold">
                            <a href="{{ route('hospedaje.show', $Hospedaje) }}">
                                {{ $Hospedaje->Nombre }}
                                
                            </a>
                        </h1>
                        <br>
                        <div>
                            @foreach ([$Hospedaje->Telefono, $Hospedaje->Correo ] as $contacto)
                                <a href="" class="inline-block px-2 h-6 bg-white text-black font-bold rounded-full">
                                    {{ $contacto }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $hospedaje->links() }}
        </div>
    </div>
    @auth
        <button type="button"
            class="bg-gray-800 p-1 rounded-lg text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
            <a href="{{ route('hospedaje.create') }}">Crear Nuevo Hospedaje</a>
        </button>
    @endauth

</x-app-layout>
{{-- @section('title', 'index')
        @section('content')

            <h1> Esta pagina es la del hospedaje</h1>
            
            <div class="main-content">
                <div class="album py-5 bg-light">
                    <div class="container">
                        <div class="row">
                            @foreach ($hospedaje as $Hospedaje)
                                <div class="col-md-4">
                                    <a href="{{ route('hospedaje.show', $Hospedaje) }}">
                                        <div class="card mb-4 shadow-sm">
                                            <img src="https://source.unsplash.com/random" />
                                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em" href="#">Thumbnail</text></svg>
                                            <div class="card-body">
                                                <h3>{{ $Hospedaje->Nombre }}</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div> --}}
{{-- @endsection --}}
