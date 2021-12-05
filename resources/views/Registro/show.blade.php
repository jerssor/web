@extends('layouts.plantilla')
@section('title', 'Bienvenido ' . $A->name)
@section('content')
<h1> Bienvenido a la pagina resgistro {{$A->name}}</h1>
<a href="{{route('registro.index')}}">Volver a registro</a><br>
<a href="{{route('registro.edit', $A)}}">Editar Curso</a>
<p><strong>Categoria:</strong>{{$A->categoria}}</p>
<p>{{$A->description}}</p>

<form action="{{route('registro.destroy', $A)}}"  method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>
</form>
@endsection

