@extends('layouts.plantilla')
@section('title', 'edit')
@section('content')

    <h1>Esta pagina es para editar Hospedaje</h1>

    <form action="{{ route('hospedaje.update', $hospedaje) }}" method="POST">

        @csrf

        @method('PUT')

        <table class="table table-hover">

            <tbody>
                <tr>
                    <td>NIT</td>
                    <td><input type="text" name="NIT" value="{{ old('NIT', $hospedaje->NIT) }}">
                        @error('NIT')
                            <br>
                            <small>*{{ $message }}</small>
                            <br>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="Nombre" value="{{ old('Nombre', $hospedaje->Nombre) }}">
                        @error('Nombre')
                            <br>
                            <small>*{{ $message }}</small>
                            <br>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Usuario</td>
                    <td><input type="text" name="Id_usuario" value="{{ old('Id_usuario', $hospedaje->Id_usuario) }}">
                        @error('Id_usuario')
                            <br>
                            <small>*{{ $message }}</small>
                            <br>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Teléfono</td>
                    <td><input type="text" name="Telefono" value="{{ old('Telefono', $hospedaje->Telefono) }}">
                        @error('Telefono')
                            <br>
                            <small>*{{ $message }}</small>
                            <br>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Correo</td>
                    <td><input type="email" name="Correo" value="{{ old('Correo', $hospedaje->Correo) }}">
                        @error('Correo')
                            <br>
                            <small>*{{ $message }}</small>
                            <br>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Direccion</td>
                    <td><input type="text" name="Direccion" value="{{ old('Direccion', $hospedaje->Direccion) }}">
                        @error('Direccion')
                            <br>
                            <small>*{{ $message }}</small>
                            <br>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Hospedaje</td>
                    <td><input type="text" name="tipo_hospedaje_id"
                            value="{{ old('tipo_hospedaje_id', $hospedaje->tipo_hospedaje_id) }}">
                        @error('tipo_hospedaje_id')
                            <br>
                            <small>*{{ $message }}</small>
                            <br>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Logo</td>
                    <td><input type="text" name="logo" value="{{ old('logo', $hospedaje->logo) }}">
                        @error('logo')
                            <br>
                            <small>*{{ $message }}</small>
                            <br>
                        @enderror
                    </td>
                </tr>
            </tbody>
        </table>
        <br>
        <button type="submit">Actualizar</button>
    </form>

@endsection
