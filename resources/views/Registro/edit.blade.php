@extends('layouts.plantilla')
@section('title', 'Editar registro')
@section('content')
<h1>Aqui puede editar un registro</h1>

<form action="{{route('registro.update', $registro)}}" method="POST">
    @csrf
    @method('put')
    <label>
        Nombre:
        <br>
        <input type="text" name="name" value="{{old('name',$registro->name)}}">
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
        <textarea name="description" rows="5">{{old('description',$registro->description)}}</textarea>
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
        <input type="text" name="categoria" value="{{old('categoria',$registro->categoria)}}">
    </label>
    @error('categoria')
     <br>
     <small>*{{$message}}</small>    
     <br>
    @enderror
    <br>
    <button type="submit">Actualizar registro</button>
</form>

@endsection
