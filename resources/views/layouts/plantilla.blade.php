<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/estilo.css">

    <!-- CSS BOOTSTRAP -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> --}}

    <!-- CSS PROPIO -->
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">

    <!-- CSS TAILWIND -->
    {{-- <link rel="stylesheet" href="css/app.css"> --}}
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    
    {{-- script     --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>


    <style>
        .active {
            color: gold;
            font-weight: bold;
        }
    </style>
</head>

@php
    $color = 'green';
@endphp

<body>
    @livewire('navigation')

    <div class="container mx-auto">
        {{-- <x-alert :color="$color">
            <x-slot name="titulo">
                Prueba Alerta 1
            </x-slot>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, nihil expedita. Velit atque, beatae molestias architecto ipsam qui modi quaerat? Sunt nisi ipsum ad consequatur nesciunt recusandae facere distinctio cumque.</p>
        </x-alert> --}}
    </div>
    <!-- nav -->
    @include('layouts.partials.nav')

    {{-- header --}}
    @include('layouts.partials.header')
<div class="container">

    {{-- content --}}
    @yield('content')
</div>
    <!-- footer -->
    @include('layouts.partials.footer')
</body>

</html>
