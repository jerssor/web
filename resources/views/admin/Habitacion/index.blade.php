@extends('adminlte::page')

@section('title', 'La Candelaria')

@section('content_header')
    <h1>Mostrar listado de Habitaciones</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($habitaciones as $habitacion)
                        <tr>
                            <td>
                                {{$habitacion->id}}
                            </td>
                            <td>
                                {{$habitacion->Tipo_habitacion}}
                            </td>
                            <td width= "10px">
                                <a class="btn btn-primary" href="{{route('admin.habitaciones.edit', $habitacion)}}">Editar</a>
                            </td>
                            <td width= "10px">
                                <form action="{{route('admin.habitaciones.destroy', $habitacion)}}" method="POST">
                                    @csrf
                                    @method('delete')

                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

