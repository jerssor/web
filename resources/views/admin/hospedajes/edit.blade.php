@extends('adminlte::page')

@section('title', 'La Candelaria')

@section('content_header')
    <h1>Editar Hospedaje</h1>
@stop

@section('content_header')
    <h1>Crear nuevo Hospedaje</h1>
@stop

@section('content') 

    @if (session('info'))
        <div class = "alert alert-success">
            <strong>{{session('info')}}</strong>    
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::model($hospedaje,['route'=>['admin.hospedajes.update', $hospedaje],'files'=> true, 'method' => 'put']) !!}
                
                 @include('admin.hospedajes.partials.form')

            {!! Form::submit('Actualizar hospedaje', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}  
        </div>
    </div>
@stop

@section('css')
    <style>
        .image-wrapper{
            position: relative;
            padding-bottom: 56.25%;
        }

        .image-wrapper img{
            position: absolute;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>

@endsection

@section('js')
    
    <script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
    <script>
        $(document).ready( function() {
            $("#Nombre").stringToSlug({
                    setEvents: 'keyup keydown blur',
                    getPut: '#slug',
                    space: '-'
            });
        });
        ClassicEditor
        .create( document.querySelector( '#Descripcion' ) )
        .catch( error => {
            console.error( error );
        } );

        document.getElementById("logo").addEventListener('change', cambiarImagen);
        function cambiarImagen(event){
            var logo = event.target.files[0];
            var reader =new FileReader();
            reader.onload =(event) =>{
                document.getElementById('picture').setAttribute('src',event.target.result);
            };
            reader.readAsDataURL(logo);
        }
    </script>
@endsection