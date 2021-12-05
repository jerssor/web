<div class="card">
        @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info') }}</strong>
        </div>
        @endif
    <div class="card-header">

        <input wire:model="search" class="form-control" placeholder="Ingrese el nombre del Hospedaje">

        
     </div>

     @if ($hospedajes->count())
            <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NIT</th>
                                <th>Nombre</th>
                                <th>Usuario</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Direccion</th>
                                <th>Tipo de hospedaje</th>
                                <th colspan="2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hospedajes as $hospedaje)
                                <tr>
                                    <td >{{$hospedaje->id}}</td>
                                    <td >{{$hospedaje->NIT}}</td>
                                    <td>{{$hospedaje->Nombre}}</td>
                                    <td>{{$hospedaje->user_id}}</td>
                                    <td>{{$hospedaje->Telefono}}</td>
                                    <td>{{$hospedaje->Correo}}</td>
                                    <td>{{$hospedaje->Direccion}}</td>
                                    <td>{{$hospedaje->tipo_hospedaje_id}}</td>
                                    <td width="10px"> 
                                        <a  class="btn btn-primary" href="{{route('admin.hospedajes.edit',$hospedaje)}}">Editar</a>
                                    </td>
                                    <td width="10px"> 
                                        <form action="{{route('admin.hospedajes.destroy',$hospedaje)}}" method="POST">
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
            <div class="card-footer">
                {{$hospedajes->links()}}
            </div>
        
            @else
                <div class="card-body">
                    <strong>No hay ningun registro...</strong>
                </div>
        
        @endif
</div>
