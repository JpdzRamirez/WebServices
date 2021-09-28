<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">

<head>
    <!--STANDAR HMTL TAGS-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{ asset('../img/favicon.ico') }}">
    <!-- bootstrap files-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript" src="{{ asset('../js/app.js') }}"> </script>
    <script type="text/javascript" src="{{ asset('../js/jquery-3.6.0.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('../js/loadingBar/loading-bar.js') }}"></script>
    <script type="text/javascript" src="{{ asset('../js/loadingBar/loading-bar.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/loading.js') }}"></script>
    <!--Animaciones contenedores-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!--Style loading-->
    <link rel="stylesheet" type="text/css" href="{{ asset('../css/loadingBar/loading-bar.css') }}" />

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app_secondary.css') }}">
    <title>@yield('title')</title>
    <!--favicon-->
    <!--estilos-->

</head>

<body>

    
    <!--Loading charging-->
    <div id="loading" data-preset="text" class="ldBar"> </div>
    <!--nav-->
    <div class="d-none" id="contentShow">
        @yield('content')
    </div>
    <!--footer-->
    <!--script-->




</body>

</html>
