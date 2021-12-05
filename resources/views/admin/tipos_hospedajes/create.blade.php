@extends('adminlte::page')

@section('title', 'La Candelaria')

@section('content_header')
    <h1>Crear tipo de hospedaje</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=> 'admin.tipos_hospedajes.store']) !!}
                <div class="form-group">
                    {!! Form::label('Tipo_hospedaje', 'Tipos de hospedajes') !!}
                    {!! Form::text('Tipo_hospedaje', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nuevo tipo de hospedaje']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Slug', 'Slug') !!}
                    {!! Form::text('Slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug tipo de hospedaje' , 'readonly']) !!}
                </div> 
                <div class="form-group">
                    {!! Form::label('Descripcion', 'Descripción') !!}
                    {!! Form::text('Descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nuevo tipo de hospedaje']) !!}
                </div> 

                {!! Form::submit('Crear tipo de hospedaje', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}

            
        </div>
    </div>
@stop

@section('js')
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script>
        $(document).ready( function() {
            $("#Tipo_hospedaje").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#Slug',
                space: '-'
            });
        });
    </script>
@endsection

