@extends('layouts.plantilla')

@section('title', 'about')

@section('content')

<body>
<section class="container">
    <div class="container">
    <h1 class="text-center text-white d-none d-lg-block site-heading"><span class="site-heading-lower  textTitleFont mb-3">About Our People&nbsp;</span><br><span class="text-primary">Only true coffee lovers </span></h1>
    <nav class="navbar nav-top  navbar-expand-lg  py-lg-4" id="mainNav" style=" background-color: transparent">
        <div class="logoCoffeContainer " style="transform: translate(0%, -100%);">
            <h1 class="neon flicker2" style="transform: translate(20%, 200%);"><br>Coffe<br> And Meals<br></h1>
                <span>
                    <img  width="1200" height="900" src="{{ asset('../img/pictureCoffee.png') }}">
                </span>

        </div>
        <div class="container"><a class="navbar-brand text-uppercase d-lg-none text-expanded"
                href="https://github.com/JpdzRamirez">JCS-Desing</a><button data-bs-toggle="collapse" class="navbar-toggler"
                data-bs-target="#navbarResponsive"><span class="visually-hidden">Toggle navigation</span><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"  style="transform: translate(-165%, -80%);" id="navbarResponsive">
                <ul class="navbar-nav mx-auto">
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
    
    <div class="container" style="transform: translate(45%, -900%);">
    <a href="{{ route('landing.index') }}" class="logo"><strong>Home</strong></a>
    </div>
    </div>
    </section>

    <section class="page-section about-heading">
        <div class="container"><img class="img-fluid rounded about-heading-img mb-3 " style="transform: translate(-15%, -10%); position:relative;" src="{{ asset('../img/about.jpg') }}">
            <div class="about-heading-content">
                <div class="row">
                    <div class="col-lg-10 col-xl-9 mx-auto">
                        <div class="bg-faded rounded p-5">
                            <h2 class="section-heading mb-4"><span class="section-heading-upper">Strong Coffee, Strong Roots</span><span class="section-heading-lower">&nbsp;About Our Cafe</span></h2>
                            <p>Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.</p>
                            <p class="mb-0"><span>We guarantee that you will fall in&nbsp;</span><span>lust</span><span>&nbsp;with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="{{ asset('../js/current-day.js')}}"></script>
</body>


@endsection