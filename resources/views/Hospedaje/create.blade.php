<x-app-layout>

    <h1>Esta pagina es para crear Hospedaje</h1>
    <div class="container">
        <form action="{{ route('hospedaje.store') }}" method="POST">
            @csrf
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <td>NIT</td>
                        <td><input type="text" name="NIT" value="{{ old('NIT') }}">
                            @error('NIT')
                                <br>
                                <small>*{{ $message }}</small>
                                <br>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Nombre hospedaje: </td>
                        <td><input type="text" name="Nombre" value="{{ old('Nombre') }}">
                            @error('Nombre')
                                <br>
                                <small>*{{ $message }}</small>
                                <br>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Usuario</td>
                        <td><input type="text" name="Id_usuario" value="{{ old('Id_usuario') }}">
                            @error('Id_usuario')
                                <br>
                                <small>*{{ $message }}</small>
                                <br>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Teléfono</td>
                        <td><input type="text" name="Telefono" value="{{ old('Telefono') }}">
                            @error('Telefono')
                                <br>
                                <small>*{{ $message }}</small>
                                <br>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Correo</td>
                        <td><input type="email" name="Correo" value="{{ old('Correo') }}">
                            @error('Correo')
                                <br>
                                <small>*{{ $message }}</small>
                                <br>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Direccion</td>
                        <td><input type="text" name="Direccion" value="{{ old('Direccion') }}">
                            @error('Direccion')
                                <br>
                                <small>*{{ $message }}</small>
                                <br>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Hospedaje</td>
                        <td><input type="text" name="tipo_hospedaje_id" value="{{ old('tipo_hospedaje_id') }}">
                            @error('tipo_hospedaje_id')
                                <br>
                                <small>*{{ $message }}</small>
                                <br>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Logo</td>
                        <td><input type="text" name="logo" value="{{ old('logo') }}">
                            @error('logo')
                                <br>
                                <small>*{{ $message }}</small>
                                <br>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Descrición</td>
                        <td><input type="text" name="Descripcion" value="{{ old('Descripcion') }}">
                            @error('Descripcion')
                                <br>
                                <small>*{{ $message }}</small>
                                <br>
                            @enderror
                        </td>
                    </tr>
                </tbody>
            </table>
            <br>
            <button type="submit">Crear</button>
        </form>


    </div>
</x-app-layout>
