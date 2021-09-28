@extends('layouts.plantilla')

@section('title', 'home')

@section('content')


    
    <!--IMPORTS HOME-->
        <!--styles-->
        <div class="container">
          <link rel="stylesheet"  type="text/css" href="{{ asset('css/landingAnimation.css') }}">
          
          <!--animaciones de pagina-->
          <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
          </div>
         
          <link rel="stylesheet"  type="text/css" href="{{ asset('css/carAnimation.css') }}">
          <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

          
         
    <audio id="myAudio" autoplay="true">
        <source src="#" type="audio/mp3">
    </audio>
    <div class="container"></div>
    <header class="contenido-encabezado" id="contenido-encabezado">
        <div class="texto-encabezado">
            <!--Title and logo-->


            <H1 class="icono">
                <i class="fab fa-angrycreative"></i>
            </H1>
            <h1 class="titulo-naranja-neon animate__animated animate__backInDown">
                JCS-SOFTWARE<br>¡Welcome!<br>
                <span class="azul-neon texto-regular">Reach Me</span><br>

                <button onclick="playAudio()" type="button" id="buttonPlay">
                    <i class="far fa-play-circle soundButton"></i>
                </button>
                <button onclick="pauseAudio()" type="button" id="buttonPause">
                    <i class="far fa-pause-circle soundButton"></i>
                </button><br>

                <div class="dropdown">
                    <input type="checkbox" id="dropdown">
                  
                    <label class="dropdown__face" for="dropdown">
                      <div class="dropdown__text">Dropdown</div>
                  
                      <div class="dropdown__arrow"></div>
                    </label>
                  
                    <ul class="dropdown__items">
                      <li>🙂</li>
                      <li>😺</li>
                      <li>😽</li>
                      <li>😎</li>
                      <li>🤗</li>
                    </ul>
                  </div>
                  
                  <svg>
                    <filter id="goo">
                      <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                      <feColorMatrix in="blur" type="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                      <feBlend in="SourceGraphic" in2="goo" />
                    </filter>
                  </svg>

                <!--Social Media Buttons-->
                <nav class="nav justify-content-center nav-justified nav-pills">
                    <a class="nav-item nav-link" href="" type="button" id="buttonPause">
                        <i class="fab fa-github"></i>
                    </a>
                    <a class="nav-item nav-link" href="mailto:jeremyivanpedraza@gmail.com?Subject=%20Servicios%20de%20Programación%20" type="button" id="buttonPause">
                        <i class="far fa-envelope"></i>
                    </a>
                    <a class="nav-item nav-link" href="https://www.linkedin.com/public-profile/settings?trk=d_flagship3_profile_self_view_public_profile" type="button" id="buttonPause">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a class="nav-item nav-link" href="https://wa.me/message/ZYPEQZ3HY5PVL1" type="button" id="buttonPause">
                        <i class="fab fa-whatsapp"></i>
                    </a>

                </nav>


                <button class="noBackground show-example-btn animate__backInDown" type="button" id="alertMessage">
                    Try me!
                </button>
                <br>
            </h1>
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
                                    <a href="{{ route('crud.index') }}">CRUD <i class="fas fa-globe-americas"></i></a>
                                    
                                </div>
                            </li>

                            <li class="nav-item">
                                <div class="button logo" id="button-2">
                                    <div id="slide"></div>
                                    <a href="#">Another</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="button logo" id="button-2">
                                    <div id="slide"></div>
                                    <a href="#">Contact</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> 

          

            <div class="container">
                <p class="mb-01">
                    <strong> Jeremy Pedraza <BR> 
                        <u> Programmer</u></strong>
                </p>
            </div>
            <p class="descripcion">
                "I have related the proactivity and effectiveness of programming in all kinds of solutions and I am passionate about what I can achieve with it"
            </p>
            
        </div>
    </header>

   <main> 
    <div class='containerCar'>
        <div class='bk'>
          <div class='mid'>
            <div class='fore'>
              <div class='figure'></div>
            </div>
          </div>
        </div>
      </div>
  

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

    
    <!--SECCION DE SCROLL-->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <script>
        window.addEventListener('scroll', () => {
            const header = document.getElementById('contenido-encabezado');
            header.style.opacity = '1' - window.pageYOffset / 650;
        });
    </script>


@endsection

