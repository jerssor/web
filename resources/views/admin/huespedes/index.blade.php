@extends('adminlte::page')

@section('title', 'La Candelaria')

@section('content_header')
    <h1>Lista de Huespedes</h1>
@stop

@section('content')
@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

    <div class="card">
        <div class="card-header">
            <a class="btn btn-secondary " href="{{route('admin.huespedes.create')}}">Agregar un huesped</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Tipo de documento</th>
                        <th>Numero de documento</th>
                        <th>Domiclio</th>
                        <th>Motivo de viaje</th>
                        <th>Origen</th>
                        <th>Destino</th>
                        <th>Sexo</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($huespedes as $huesped)
                            <tr >
                                <td>{{$huesped->id}}</td>
                                <td>{{$huesped->Nombre}}</td>
                                <td>{{$huesped->Apellido}}</td>
                                <td>{{$huesped->Telefono}}</td>
                                <td>{{$huesped->correo}}</td>
                                <td>{{$huesped->tipo_documento_id}}</td>
                                <td>{{$huesped->Numero_documento}}</td>
                                <td>{{$huesped->Domicilio}}</td>
                                <td>{{$huesped->Motivo_viaje_id}}</td>
                                <td>{{$huesped->origen_id}}</td>
                                <td>{{$huesped->destino_id}}</td>
                                <td>{{$huesped->sexo_id}}</td>
                                
                                <td width="10px">
                                    <a class="btn btn-primary" href="{{route('admin.huespedes.edit', $huesped)}}">Editar</a>
                                </td>
                                <td width="10px">
                                    <form 
                                        action="{{route('admin.huespedes.destroy',$huesped)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                </tbody>
            </table>

        </div>
    </div>
@stop

