<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'WebTransito') }}</title>

         <!-- Bootstrap core CSS -->
         <link rel="stylesheet" href="bootstrap/css/bootstrap.css" >
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
         <!-- Custom styles for this template -->
         <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
         <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

         <link rel="shortcut icon" type="imagex/png" href="assets/Imagens/logoSistema.png">


        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            <div class="container-fluid align-content-center w-100 shadow-lg">
                <header class="text-center mb-1 bg-info align-content-center p-auto d-block" id="header">
                    <h1 class="text-center text-capitalize"><b>WebTrânsito</b></h1>
                </header>

                <header class="text-center mb-2 bg-light align-content-center p-auto d-block">
                    <h3 class="text-center"><b>Sistema Auto de Infração de Trânsito - SAIT</b></h3>
                </header>
            </div>
            {{ $slot }}

        </div>
    </body>
</html>
