@extends('adminlte::page')

@section('title', 'La Candelaria')

@section('content_header')
    <h1>Lista tipo de hospedaje</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a class="btn btn-secondary" href="{{route('admin.tipos_hospedajes.create')}}">Agregar tipo de hospedaje</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tipo_hospedaje as $tipos_hospedajes)
                        <tr>
                            <td>{{$tipos_hospedajes->id}}</td>
                            <td>{{$tipos_hospedajes->Tipo_hospedaje}}</td>
                            <td>{{$tipos_hospedajes->Descripcion}}</td>
                            <td width = "10px">
                                <a class="btn btn-primary" href="{{route('admin.tipos_hospedajes.edit', $tipos_hospedajes)}}">Editar</a>
                            </td>
                            <td width = "10px">
                                <form action="{{route('admin.tipos_hospedajes.destroy', $tipos_hospedajes )}}" method="POST">
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

