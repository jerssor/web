@extends('layouts.plantilla')
@section('title', 'Crear Registro')
@section('content')
<h1>Aqui puede crear un registro</h1>

<form action="{{route('registro.store')}}" method="POST" >
    @csrf
    <label>
        Nombre:
        <br>
        <input type="text" name="name" value="{{old('name')}}">
    </label>
        @error('name')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
    <label>
        Descripcion:
        <br>
        <textarea name="description" rows="5" ></textarea>
    </label>

        @error('description')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        <br>
    <label>
        Categoria:
        <br>
        <input type="text" name="categoria" value="{{old('name')}}">
    </label>

    @error('categoria')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror


    <br>
    <button type="submit">Enviar registro</button>
</form>

@endsection
