@extends('layouts.plantilla')
@section('title', 'Index')
@section('content')
<h1>Bienvenido a la pagina podras hacer un registro</h1>
<a href="{{route('registro.create')}}">crear registro</a>
<ul>
    @foreach ($registro as $regist)
   <li>
    <a href="{{route('registro.show',$regist)}}">{{$regist->name}}</a>
    <br>
    </li>
    @endforeach
</ul>
{{$registro->links()}}
@endsection

