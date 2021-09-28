<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">

<head>
    <!--STANDAR HMTL TAGS-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">

    <!-- bootstrap files-->
           
    <script type="text/javascript" src="{{ asset('../js/jsJCS/app.js') }}"> </script>
    <script type="text/javascript" src="{{ asset('../js/jsJCS/jquery-3.6.0.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('../js/jsJCS/loading.js') }}"></script>
    <script type="text/javascript" src="{{ asset('../js/jsJCS/loadingBar/loading-bar.js') }}"></script>
    
    <!--Style loading-->
    <link rel="stylesheet" type="text/css" href="{{ asset('../css/loadingBar/loading-bar.css') }}" />
    <!-- Nuestro css BASADO EN BOOTSTRAP-->
    <link rel="stylesheet" type="text/css" href="{{ asset('../css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>@yield('title')</title>
    <!--favicon-->
    <!--estilos-->

    <!--Script SweetAlert-->
    <script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  
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
    <script src="{{ asset('../js/jsJCS/sweetalert2.all.min.js') }}"></script>
    


</body>

</html>
