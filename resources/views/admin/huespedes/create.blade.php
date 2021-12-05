@extends('adminlte::page')

@section('title', 'La Candelaria')

@section('content_header')
    <h1>Crera nuevo Huesped</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.huespedes.store']) !!}
                <div class="form-group">
                        {!! Form::label('Nombre', 'Nombre') !!}
                        {!! Form::text('Nombre', null, ['class' =>'form-control', 'placeholder' => 'Ingrese el nombre del huesped']) !!}
                        @error('Nombre')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
            
                </div>  
                {{-- <div class="form-group"> 
                    {!! Form::label('slug', 'Slug') !!}
                    {!! Form::text('slug', null, ['class' =>'form-control', 'placeholder' => 'Ingrese el slug del huesped','readonly']) !!}
                    @error('slug')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
        
                 </div> --}}
                 <div class="form-group">
                    {!! Form::label('Apellido', 'Apellido') !!}
                    {!! Form::text('Apellido', null, ['class' =>'form-control', 'placeholder' => 'Ingrese el Apellido del huesped']) !!}
                    @error('Apellido')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
        
                 </div>
                 <div class="form-group"> 
                    {!! Form::label('Telefono', 'Telefono') !!}
                    {!! Form::text('Telefono', null, ['class' =>'form-control', 'placeholder' => 'Ingrese el Telefono del huesped']) !!}
                    @error('Telefono')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                 </div>
                 <div class="form-group">
                    {!! Form::label('correo', 'Correo') !!}
                    {!! Form::text('correo', null, ['class' =>'form-control', 'placeholder' => 'Ingrese el correo del huesped']) !!}
                    @error('correo')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                 </div>
                 <div class="form-group"> 
                    {!! Form::label('tipo_documento_id', 'Tipo de documento') !!}
                    {!! Form::text('tipo_documento_id', null, ['class' =>'form-control', 'placeholder' => 'Ingrese el tipo de documento del huesped']) !!}
                    @error('tipo_documento_id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                 </div>
                 <div class="form-group">
                    {!! Form::label('Numero_documento', 'Numero de docuemnto') !!}
                    {!! Form::text('Numero_documento', null, ['class' =>'form-control', 'placeholder' => 'Ingrese el numero de documento del huesped']) !!}
                    @error('Numero_documento')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                 </div>
                 <div class="form-group">
                    {!! Form::label('Domicilio', 'Domicilio') !!}
                    {!! Form::text('Domicilio', null, ['class' =>'form-control', 'placeholder' => 'Ingrese el domicilio del huesped']) !!}
                    @error('Domicilio')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                 </div>
                 <div class="form-group">
                    {!! Form::label('motivo_viaje_id', 'Motivos de viaje') !!}
                    {!! Form::text('motivo_viaje_id', null, ['class' =>'form-control', 'placeholder' => 'Ingrese el motivo de viaje del huesped']) !!}
                    @error('motivo_viaje_id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                 </div>
                 <div class="form-group">
                    {!! Form::label('origen_id', 'Origen') !!}
                    {!! Form::text('origen_id', null, ['class' =>'form-control', 'placeholder' => 'Ingrese el origen del huesped']) !!}
                    @error('origen_id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                 </div>
                 <div class="form-group">
                    {!! Form::label('destino_id', 'Destino') !!}
                    {!! Form::text('destino_id', null, ['class' =>'form-control', 'placeholder' => 'Ingrese el destino del huesped']) !!}
                    @error('destino_id')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                 </div>
                 <div class="form-group"> 
                    {!! Form::label('sexo_id', 'Sexo') !!}
                    {!! Form::text('sexo_id', null, ['class' =>'form-control', 'placeholder' => 'Ingrese el sexo del huesped']) !!}
                    @error('sexo_id')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                 </div>
                    {!! Form::submit('Crear Huesped', ['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
        </div>
    </div>
@stop

{{-- @section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script>
        $(document).ready( function() {
            $("#Nombre").stringToSlug({
                    setEvents: 'keyup keydown blur',
                    getPut: '#slug',
                    space: '-'
            });
        });
    </script>
@endsection --}}

