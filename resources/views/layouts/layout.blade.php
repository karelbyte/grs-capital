<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>GRS-Capital</title>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset('img/logos/icon.png')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/icomoon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/slider.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/switcher.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles-4.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
</head>
<body>
<div id="preloader">
    <div class="row loader">
        <div class="loader-icon"></div>
    </div>
</div>
@yield('content')

<!-- Footer START -->
<footer>
    <div class="container">
        <div class="row">
            <!-- Column 1 Start -->
            <div class="col-md-6 col-sm-6 col-12">
                <h5 style="color:navajowhite;">GRS Capital SA de CV y GRS Sociedad de Inversión ®</h5>
                <div class="mt-25">
                    <p class="mt-25">Fondo de Inversión y Marca registrada de Grupo RSantos SA de CV, empresa Mexicana dedicada a la gestión de patrimonios, buscando excelentes oportunidades de inversión,
                        ya sea en Bienes Raíces, en el Sistema Financiero o el Mercado de Divisas.</p>
                    <div class="footer-social-icons mt-25">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Column 1 End -->
            <!-- Column 2 Start -->
            <div class="col-md-6 col-sm-6 col-12">
                <ul class="footer-list">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nuestras estrategias</a></li>
                    <li><a href="#">Politicas de privacidad</a></li>
                    <li><a href="#">Aviso legal</a></li>
                    <li><a href="#">Condiciones de uso</a></li>
                </ul>
            </div>
        </div>

        <!-- Footer Bar Start -->
        <div class="footer-bar">
            <p><span class="primary-color">GRS Capital</span> © 2020. All Rights Reserved.</p>
        </div>
        <!-- Footer Bar End -->
    </div>
</footer>
<!-- Footer END -->


<!-- Scroll to top button Start -->
<a href="#" class="scroll-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<!-- Scroll to top button End -->


<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.js')}}"></script>
<script src="{{asset('js/navigation.js')}}"></script>
<script src="{{asset('js/navigation.fixed.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>
<script src="{{asset('js/tabs.min.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('js/swiper.min.js')}}"></script>
<script src="{{asset('js/modernizr.js')}}"></script>
<script src="{{asset('js/switcher.js')}}"></script>
<script src="{{asset('js/map.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>

