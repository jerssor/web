<div wire:init="loadPosts">
    @if (count($hospedaje))
    <div class="glider-contain">
        <ul class="glider">
            @foreach ($habitacion as $habitaciones)
                <li class="bg-white rounded-lg shadow {{ $loop->last ? '' : 'mr-4' }}">
                    <article>
                        <figure>
                            <img src="https://cdn.pixabay.com/photo/2016/04/15/11/48/hotel-1330850_960_720.jpg" alt="">
                        </figure>
                        <div class="py-4 px-6">
                            <h1 class="text-lg font-semibold">
                                <a href="">{{ $habitaciones->Tipo_habitacion }}</a>
                            </h1>
                            <hr><br>
                            <p class="font-bold text-trueGray-700 text-right">COP$ {{ $habitaciones->Precio }}</p>
                        </div>
                    </article>
                </li>
            @endforeach
        </ul>
        <button aria-label="Previous" class="glider-prev">«</button>
        <button aria-label="Next" class="glider-next">»</button>
        <div role="tablist" class="dots"></div>
    </div>
    @else
        
    @endif
    
</div>