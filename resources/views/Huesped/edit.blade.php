@extends('layouts.plantilla')
@section('title', 'edit')
@section('content')

<h1>Esta pagina es para editar Huesped</h1>

<form action="{{ route('huesped.update',$huesped) }}" method="POST">

    @csrf
    @method('put')
    
   <label>
        Nombre: 
        <input type="text" name="Nombre"  value="{{old('Nombre', $huesped->Nombre)}}">
   </label>
   @error('Nombre')
     <br>  
   <small>*{{$message}}</small>
    <br>
   @enderror
    <br>
   <label>
        Apellido: 
        <input type="text" name="Apellido"  value="{{old('Apellido', $huesped->Apellido)}}">
    </label>
    @error('Apellido')
    <br>  
  <small>*{{$message}}</small>
   <br>
  @enderror
    <br>
   <label>
        Telefono: 
        <input type="text" name="Telefono" value="{{old('Telefono', $huesped->Telefono)}}">
    </label>
    @error('Telefono')
    <br>  
  <small>*{{$message}}</small>
   <br>
  @enderror
    <br>    
   <label>
        Correo: 
        <input type="text" name="correo" value="{{old('correo', $huesped->correo)}}">
    </label>
    @error('correo')
    <br>  
  <small>*{{$message}}</small>
   <br>
  @enderror
    <br>
   <label>
        Tipo de documento: 
        <input type="text" name="tipo_documento_id" value="{{old('tipo_documento_id', $huesped->tipo_documento_id)}}">
    </label>
    @error('tipo_documento_id')
    <br>  
  <small>*{{$message}}</small>
   <br>
  @enderror
    <br>
   <label>
        Numero de documento: 
        <input type="text" name="Numero_documento" value="{{old('Numero_documento', $huesped->Numero_documento)}}">
    </label>
    @error('Numero_documento')
    <br>  
  <small>*{{$message}}</small>
   <br>
  @enderror
    <br>
   <label>
        Domicilio: 
        <input type="text" name="Domicilio"  value="{{old('Domicilio', $huesped->Domicilio)}}">
    </label>
    @error('Domicilio')
    <br>  
  <small>*{{$message}}</small>
   <br>
  @enderror
    <br>
   <label>
        Motivo de viaje: 
        <input type="text" name="motivo_viaje_id" value="{{old('motivo_viaje_id', $huesped->motivo_viaje_id)}}">
    </label>
    @error('motivo_viaje_id')
    <br>  
  <small>*{{$message}}</small>
   <br>
  @enderror
    <br>
   <label>
        Origen: 
        <input type="text" name="origen_id" value="{{old('origen_id', $huesped->origen_id)}}">
    </label>
    @error('origen_id')
    <br>  
  <small>*{{$message}}</small>
   <br>
  @enderror
    <br>
   <label>
        Destino: 
        <input type="text" name="destino_id" value="{{old('destino_id', $huesped->destino_id)}}">
    </label>
    @error('destino_id')
    <br>  
  <small>*{{$message}}</small>
   <br>
  @enderror
    <br>
   <label>
        Sexo: 
        <input type="text" name="sexo_id" value="{{old('sexo_id', $huesped->sexo_id)}}">
    </label>
    @error('sexo_id')
    <br>  
  <small>*{{$message}}</small>
   <br>
  @enderror
    <br>
    <button type="submit">::Actualizar Huesped::</button>

</form>

@endsection 


