<!DOCTYPE html>
<html lang="es">

<head>
    <title>Miradores Cabo De Gata</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/style.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.js"></script>
    <link rel="icon" href="/images/m.png" type="image/png">
    <script src="assets/script.js"></script>
    <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css" />
    <script src="assets/owl-carousel/owl.carousel.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <style>
        .video-container {
            position: relative;
            padding-top: 56.25%;

        }
        .video-container video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .video-player {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .contact-number {
            margin-top: 20px;
            text-align: center;
            font-size: 1.2em;
        }
    </style>
</head>

<body>
    <!-- Header Starts -->
    <div class="navbar-wrapper">
        <div class="navbar-inverse" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Nav Starts -->
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="{{route('alquilar.inicio')}}">Inicio</a></li>
                        <li><a href="{{route('alquilar.blog')}}">Blog</a></li>
                        <li><a href="{{route('alquilar.contacto')}}">Contacto</a></li>
                        <li><a href="{{route('alquilar.sobrenosotros')}}">Sobre Nosotros</a></li>
                    </ul>
                </div>
                <!-- #Nav Ends -->
            </div>
        </div>
    </div>
    <div class="inside-banner header">
        <div class="container">
            <a href="{{route('alquilar.inicio')}}"><img src="images/m.png" alt="Realestate" /></a>

            <ul class="pull-right">
                <li class="active"><a href="{{route('alquilar.inicio')}}">Inicio</a></li>
                <li><a href="{{route('alquilar.blog')}}">Blog</a></li>
                <li><a href="{{route('alquilar.contacto')}}">Contacto</a></li>
                <li><a href="{{route('alquilar.sobrenosotros')}}">Sobre Nosotros</a></li>
            </ul>
        </div>
    </div>