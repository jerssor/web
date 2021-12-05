@extends('adminlte::page')

@section('title', 'La Candelaria')

@section('content_header')
<a class="btn btn-secondary float-right" href="{{route('admin.hospedajes.create')}}">Agregar Hospedaje</a>

    <h1>Lista De Hospedajes </h1>
    @stop

@section('content')


    @livewire('admin.hospedaje-index')
@stop