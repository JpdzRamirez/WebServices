
<html lang="en" xmlns:th="http://www.thymeleaf.org">

<head>
    <!--STANDAR HMTL TAGS-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Favicon-->
    <link rel="icon" href="{{ asset('../img/cafe.ico') }}">

    <!--script-->}
    <script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <!-- bootstrap files-->
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!--styles-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    
    <!--animaciones de pagina-->
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">

   

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>


    <title>@yield('title')</title>

 


   

</head>

<body onload="loadingAnimation()">

    <!--Loading charging-->
    <div class="d-flex justify-content-center align items-center" id="loading">

        <span id="coffeeLoading">

            <div class="loader">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="wineglass left">
                    <div class="top"></div>
                </div>
                <div class="wineglass right">
                    <div class="top"></div>
                </div>
            </div>
            <style>
                body {


                    background: linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url(../video/fondo.svg);
                    background-attachment: fixed;
                    background-position: center;
                    background-size: cover
                }

                .wineglass {
                    height: 36px;
                    position: relative;
                }

                .wineglass:after {
                    content: '';
                    position: absolute;
                    top: 47px;
                    left: 5px;
                    width: 20px;
                    height: 5px;
                    background: white;
                    box-shadow: 0 0 1px white;
                }

                .top {
                    background: white;
                    width: 30px;
                    height: 36px;
                    border-radius: 0 0 36px 36px;
                    box-shadow: 0 0 1px white;
                }

                .top:before {
                    content: '';
                    position: absolute;
                    left: 4px;
                    bottom: 4px;
                    width: 22px;
                    height: 22px;
                    border-radius: 50%;
                    background: linear-gradient(transparent 50%, #8C4820 50%);
                }

                .left .top:before {
                    animation: rotate2 2s linear infinite;
                }

                .right .top:before {
                    animation: rotate1 2s linear infinite;
                }

                .top:after {
                    content: '';
                    position: absolute;
                    top: 35px;
                    left: 12px;
                    width: 6px;
                    height: 13px;
                    background: white;
                    box-shadow: 0 0 1px white;
                }

                .left {
                    display: inline-block;
                    margin-right: 10px;
                    animation: rotate1 2s cubic-bezier(.39, 1.52, .46, .92) infinite;
                }

                .right {
                    display: inline-block;
                    animation: rotate2 2s cubic-bezier(.39, 1.52, .46, .92) infinite;
                }

                @keyframes rotate1 {
                    0% {
                        transform: rotate(0deg);
                    }

                    50% {
                        transform: rotate(22deg);
                    }
                }

                @keyframes rotate2 {
                    0% {
                        transform: rotate(0deg);
                    }

                    50% {
                        transform: rotate(-22deg);
                    }
                }

                ul {
                    list-style: none;
                    margin: 0;
                    padding: 0;
                    width: 70px;
                    height: 25px;
                    position: relative;
                    opacity: 0;
                    animation: 2s fadeInUp infinite linear 2s;
                }

                li {
                    width: 6px;
                    height: 15px;
                    background: white;
                    position: absolute;
                    box-shadow: 0 0 1px white;
                    transform-origin: bottom;
                }

                li:nth-child(1) {
                    left: 26px;
                    bottom: 5px;
                    transform: rotate(-35deg);
                }

                li:nth-child(2) {
                    left: 34px;
                    bottom: 8px;
                }

                li:nth-child(3) {
                    left: 42px;
                    bottom: 5px;
                    transform: rotate(35deg);
                }

                @keyframes fadeInUp {
                    0% {
                        opacity: 0;
                        transform: scaleY(1);
                    }

                    33% {
                        opacity: 1;
                        transform: scaleY(1.4);
                    }

                    64% {
                        opacity: .1;
                        transform: scaleY(1);
                    }

                    100% {
                        opacity: 0;
                        transform: scaleY(.3);
                    }
                }

            </style>
        </span>

    </div>
    <!--nav-->
    <div class="d-none" id="contentShow">
        @yield('content')
    </div>
    <!--footer-->
    <div class="d-none" id="contentFooter">
    <footer class="text-center footer text-faded py-5">
        <div class="container py-5">
          <div class="row">
            <div class="col-lg-3 mb-3">
              <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/" aria-label="Bootstrap">
                <img src="{{ asset('../img/coffee.svg') }}" width="40" height="32">
                <span class="serviceList ">Coffee And Meals</span>
              </a>
              <ul class="list-unstyled small text-muted">
                <li class="mb-2">Designed and built with all the love in the world with the <a href="/docs/5.1/about/team/">Bootstrap</a> with the help of <a href="https://github.com/twbs/bootstrap/graphs/contributors">our contributor</a>.</li>
                <li class="mb-2">Bootstrap v5.1.1.</li>
                <li class="mb-4">
                    <form>
                        <div class="form-group col-auto">
                            <label for="exampleFormControlInput1">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                          </div>
                          <div class="form-group col-auto">
                            <label for="exampleFormControlTextarea1">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                          <div class="col-auto">
                            <button type="submit" class="btn btn-warning mb-2">Submit</button>
                          </div>
                    </form>
                </li>
              </ul>
            </div>
            <div class="col-6 col-lg-2 offset-lg-1 mb-3">
              <h5>Social Media</h5>
              <ul class="list-unstyled">
                <li class="mb-2"><a href="/">Home</a></li>
                <li class="mb-2"><a> <i class="fab fa-facebook" href="#"></i>Facebook</a></li>
                <li class="mb-2"><a> <i class="fab fa-facebook" href="#"></i>Twitter</a></li>
                <li class="mb-2"><a> <i class="fab fa-facebook" href="#"></i>Whatsapp</a></li>
                <li class="mb-2"><a> <i class="fab fa-facebook" href="#"></i>Youtube</a></li>
              </ul>
            </div>

            <div class="col-6 col-lg-2 mb-3">
              <h5>Where we are</h5>
              <ul class="list-unstyled">
                <li class="mb-2">
                    <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.662566537198!2d-74.80441818588203!3d10.988822158243716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef42d6d61252cad%3A0x272507084f15eca9!2sEl%20Cappuccino%20Caf%C3%A9-bistr%C3%B3!5e0!3m2!1ses!2sco!4v1631760642337!5m2!1ses!2sco" 
                    width="300%" style="border: 0.25rem solid rgba(121, 83, 2, 0.85);" height="100%" sandbox="allow-same-origin allow-forms allow-scripts" scrolling=autostyle="border:0;" allowfullscreen="true" loading="lazy"></iframe>
                    </div>
                    <iframe src="" frameborder="9"></iframe>
                </li>
                
              </ul>
            </div>
          </div>
          
        </div>
        <div class="container">
            <p class="m-0 small">Copyright&nbsp;©&nbsp;JCS-Design 2021</p>
        </div>
      </footer>
    </div>
    <!--scripts-->
  
    <script src="anijs-min.js"></script>
    
    <!--scripts import-->

    <script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
       
    

    
    

    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <!--SCROLL-->
    <script type="module" src="{{ asset('js/scrollMovent/smooth-scroll.polyfills.js') }}"></script>
    <!--SCRIPT ALERTAS-->
    <script type="module"  src="{{ asset('js/alertsScripts/sweetalert2@11.js') }}"></script>

    <script type="module"  src="{{ asset('js/Scripts.js') }}"></script>

    <script src="anijs-min.js"></script>
</body>

</html>
