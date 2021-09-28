@extends('layouts.plantilla')

@section('title', 'home')

@section('content')

    <audio id="myAudio" autoplay="true">
        <source src="{{ asset('../music/ambient.mp3') }}" type="audio/mp3">
    </audio>
    <div class="container"></div>
    <header class="contenido-encabezado" id="contenido-encabezado">
        <div class="texto-encabezado">
            <!--Title and logo-->


            <p class="icono">
                <i class="fas fa-mug-hot"></i>
            </p>
            <h1 class="titulo-naranja-neon animate__animated animate__backInDown">
                Coffee And Meals<br>¡Welcome!<br>
                <span class="azul-neon texto-regular">50% off</span><br>
                <button onclick="playAudio()" type="button" id="buttonPlay">
                    <i class="far fa-play-circle soundButton"></i>
                </button>
                <button onclick="pauseAudio()" type="button" id="buttonPause">
                    <i class="far fa-pause-circle soundButton"></i>
                </button>
                <br>
            </h1>
            <p class="descripcion">
                Grand Opening<br>
                By opening, all our drinks at half
                of price in AV 42-111,, Cl. 68 #421, Col. Barranquilla, Atlántico.

            </p>

            <div class="ui">
                <p>A basic message</p>
                <button class="show-example-btn animate__backInDown" aria-label="Try me! Example: A basic message" id="alertMessage">
                  Try me!
                </button>
              </div>

            <div class="container">
                <p class="mb-01">
                    <strong> We are Coffee And Meals, a coffee-flavored experience that you will want to remember for the
                        rest of your life. We started out in 2020, in the midst of a pandemic we decided to create the first
                        product of our company called "special milkshakes" since then we have created a series of delicious
                        products based on 100% Colombian coffee that you will find in our menu.</strong>
                </p>
            </div>
            <nav class="navbar nav-top  navbar-expand-lg  py-lg-4" id="mainNav" style=" background-color: transparent">
                <div class="container"><a class="navbar-brand text-uppercase d-lg-none text-expanded"
                        href="https://github.com/JpdzRamirez">JCS-Desing</a><button data-bs-toggle="collapse" class="navbar-toggler"
                        data-bs-target="#navbarResponsive"><span class="visually-hidden">Toggle navigation</span><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <div class="button logo" id="button-3">
                                    <div id="circle"></div>
                                    <a href="#services">Services</a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <div class="button logo" id="button-3">
                                    <div id="circle"></div>
                                    <a href="{{ route('landing.about')}}">About Us!</a>
                                </div>
                            </li>

                            <li class="nav-item">
                                <div class="button logo" id="button-2">
                                    <div id="slide"></div>
                                    <a href="{{ route('landing.menu') }}">Menu</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="button logo" id="button-2">
                                    <div id="slide"></div>
                                    <a href="{{ route('landing.store') }}">Contact</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> 
        </div>
    </header>

    <main>
        <!--Section Services-->
        <section class="contenedor" id="services">
            <h2 class="subtitulo-h2">Services</h2>
            <ul class="serviceList">
                <li type="disc"> <strong><span class="letra-capital">B</span>irthday celebrations</strong> :In Coffe And
                    Meals children will live an unforgettable party, with their family
                    and friends where they will find many surprises and of course, the best products to share on that
                    special day. Contact us!</li><br>
                <li type="disc"><strong><span class="letra-capital">A</span>nniversaries </strong>: In Coffe And Meals you
                    will find different private rooms to celebrate your special dates
                    and make your anniversary a day to remember. We have the service of decoration of environments, flowers,
                    ambient music and organization of celebration. </li><br>
                <li type="disc"><strong><span class="letra-capital">D</span>inner with friends</strong>: In Coffe And Meals
                    you can come with your friends, where you will find a cheerful
                    and fun atmosphere. </li><br>
                <li type="disc"><strong><span class="letra-capital">P</span>roposals</strong>: In Coffe And Meals we are
                    accomplices of love, that's why you will find a very special space
                    for you and your partner, where the experience will be very spectacular and above all full of love.
                </li>
            </ul>


            <!--Promise-->

            <div class="page-section cta">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 mx-auto">
                            <div class="text-center cta-inner rounded">
                                <h2 class="section-heading mb-4"><span class="section-heading-upper">Our Promise</span><span
                                        class="section-heading-lower">To You</span></h2>
                                <p class="mb-0">When you walk into our shop to start your day, we are dedicated to
                                    providing you with friendly service, a welcoming atmosphere, and above all else,
                                    excellent
                                    products made with the highest quality ingredients. If you are not satisfied, please let
                                    us
                                    know and we will do whatever we can to make things right!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--END SECTION Services-->
      
        <!-- DIVITION -->
        <section class="container">

            <div class="page-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 mx-auto">
                            <div class="text-center cta-inner rounded">
                                <img src="{{ asset('../img/divitionOne.svg') }}">
                                <br>
                                <img src="{{ asset('../img/divitionTwo.svg') }}">

                                <div class="mx-auto intro-button">
                                <a class="d-inline-flex align-items-center mb-2  text-decoration-none btn-link" href="#" aria-label="Bootstrap">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-up"
                                            class="svg-inline--fa fa-angle-up fa-w-10" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="90"
                                            height="100">
                                            <path fill="currentColor"
                                                d="M177 159.7l136 136c9.4 9.4 9.4 24.6 0 33.9l-22.6 22.6c-9.4 9.4-24.6 9.4-33.9 0L160 255.9l-96.4 96.4c-9.4 9.4-24.6 9.4-33.9 0L7 329.7c-9.4-9.4-9.4-24.6 0-33.9l136-136c9.4-9.5 24.6-9.5 34-.1z">
                                            </path>
                                        </svg>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--END SECTION Divition-->

 


        <!--SECTION ABOUT US-->


    </main>

    <!--END SECTION About US-->

    <!-- Then put toasts within 
                                                
                                                HOW CALL A TOAST AND PUT OVER
                                                <button type="button" class="btn btn-primary" id="show-toast" >About us</button>
                                                
                                                <img src="..." class="rounded me-2" alt="..."> 
                                                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="toastAbout"
                                                style="position: absolute; top: 50%; right: 50%;">
                                                <div class="toast-header">
                                                    <img src="/*{/{ asset('../img/favicon.ico') }}" class="rounded me-2" alt="5">
                                                    <strong class="me-auto">Coffee and meals</strong>
                                                    <small>11 mins ago</small>
                                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                                </div>
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                </div>
                                                <div class="mt-2 pt-2 border-top">
                                                    <div class="btn-group" role="group" aria-label="Basic example">>
                                                        <button type="button" class="btn btn-primary btn-sm">Take order</button>
                                                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="toast">Close</button>
                                                    </div>
                                                </div>
                                            </div>


                               
                               
                            </div>-->



    <!--*******************************SCRIPTSSSSS**********************************-->

    <script type="text/javascript" src="{{ asset('js/current-day.js') }}"></script>

    <script>
        var reproductor = document.getElementById("myAudio");

        function playAudio() {
            reproductor.play();
        };

        function pauseAudio() {
            reproductor.pause();
        };
        $(document).ready(function() {

            const options = {
                animation: true,
                autohide: false,
                delay: 5000,
            };
            $('.toast').toast(options);
            $('#show-toast').click(function() {
                $("#toastAbout").toast('show');
            });

        });
    </script>
    <!--SECCION DE SCROLL-->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <script>
        window.addEventListener('scroll', () => {
            const header = document.getElementById('contenido-encabezado');
            header.style.opacity = '1' - window.pageYOffset / 650;
        });
    </script>


@endsection
