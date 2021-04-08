<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desafio - BRTK</title>
    <link href="{{ asset('css/materialize.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.css" />
</head>

<body>
    @include('layouts.header')

    <div class="container" style="text-align: center;">
        <h4 style="color: {{session('color')}};">
            {{session('msg')}}
        </h4>
    </div>

    <div class="container">
        @yield('content')
    </div>
    @include('layouts.footer')
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/materialize.js') }}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.24/datatables.min.js"></script>
    <script src="{{ asset('js/inputMask.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>