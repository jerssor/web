@extends('layouts.plantilla')
@section('title', 'Huesped')
@section('content')
<h1>Esta pagina es para mostrar Huesped {{$huesped}}</h1><br>
<a href="{{route('huesped.edit', $huesped)}}">Editar huesped</a>

@endsection 


