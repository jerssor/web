{{-- @extends('layouts.plantilla')
@section('title', 'index')
@section('content') --}}
<x-app-layout>
    <div class="container bg-gray-400">
    <h1> Esta pagina es la del huesped</h1>
    <a href="{{route('huesped.create')}}">::Crear Huesped::</a>
    

    <ul>
        
        @foreach ($huesped as $Huesped )
         <table> 
             <td> 
                @foreach ([$Huesped->Tipo_documento] as $tipo_documento )
                    <a href="">{{$tipo_documento->Tipo_documento}} </a>
                @endforeach
            </td> 
            <td>
                <h1>/ {{$Huesped->Numero_documento}} / </h1>
                
            </td>
             <td>
                 <a href="{{route('huesped.show', $Huesped->id)}}">{{$Huesped->Nombre}} </a>
            </td>     
            
            </table> 
    
             @endforeach

    </ul>
</div>
    {{$huesped->links()}}
</x-app-layout>
{{-- @endsection  --}}
