@extends('layouts.plantilla')

@section('title', 'menu')

@section('content')


<body >
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

    <section class="page-section">
        <div class="container">
            <div class="product-item">
                <div class="d-flex product-item-title">
                    <div class="d-flex me-auto bg-faded p-5 rounded">
                        <h2 class="section-heading mb-0"><span class="section-heading-upper">Blended to Perfection</span><span class="section-heading-lower">Coffees &amp; Teas</span><br><span class="section-heading-upper" styles="color: white">Cold drink in ground coffee. Price: $ 4,500</span></h2>
                    </div>
                </div><img class="img-fluid d-flex mx-auto product-item-img mb-3 mb-lg-0 rounded" style="border: 0.5rem solid rgba(71, 49, 1, 0.85);" src="{{ asset('../img/products-01.jpg') }}">
                <div class="bg-faded p-5 rounded">
                    <p class="mb-0">We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section">
        <div class="container">
            <div class="product-item">
                <div class="d-flex product-item-title">
                    <div class="d-flex ms-auto bg-faded p-5 rounded">
                        <h2 class="section-heading mb-0"><span class="section-heading-upper">Delicious Treats, Good Eats</span><span class="section-heading-lower">Bakery &amp; Kitchen</span></h2>
                    </div>
                </div><img class="img-fluid d-flex mx-auto product-item-img mb-3 mb-lg-0 rounded" style="border: 0.5rem solid rgba(71, 49, 1, 0.85);" src="{{ asset('../img/products-02.jpg')}}">
                <div class="bg-faded p-5 rounded">
                    <p class="mb-0">Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section">
        <div class="container">
            <div class="product-item">
                <div class="d-flex product-item-title">
                    <div class="d-flex mx-auto bg-faded p-5 rounded">
                        <h2 class="section-heading mb-0"><span class="section-heading-upper">From Around the World</span><span class="section-heading-lower">Bulk Speciality Blends</span></h2>
                    </div>
                </div><img class="img-fluid d-flex mx-auto product-item-img mb-3 mb-lg-0 rounded" style="border: 0.5rem solid rgba(71, 49, 1, 0.85);" src="{{ asset('../img/products-03.jpg') }}">
                <div class="bg-faded p-5 rounded">
                    <p class="mb-0">Travelling the world for the very best quality coffee is something take pride in. When you visit us, you'll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section">
        <div class="container">
            <div class="product-item">
                <div class="d-flex product-item-title">
                    <div class="d-flex mx-auto bg-faded p-5 rounded">
                        <h2 class="section-heading mb-0"><span class="section-heading-upper">From Around the World</span><span class="section-heading-lower">Menu Card</span></h2>
                    </div>
                </div><img class="img-fluid d-flex mx-auto product-item-img mb-3 mb-lg-0 rounded" style="border: 0.5rem solid rgba(71, 49, 1, 0.85);" src="{{ asset('../img/Menu.png') }}">

            </div>
        </div>
    </section>
</body>

@endsection