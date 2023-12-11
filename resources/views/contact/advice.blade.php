@extends('navbar.navbar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/advice.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
<body>
<section id="split-screen">
        <div class="left">
           <img src="img/OSOS_LOGO_1.png" />
            <h1>Contáctenos para comenzar su viaje empresarial</h1>
            <p>
            Felicitaciones por dar el primer paso para unirte a nuestra increíble organización.
            </p>
            <p>
            Complete el siguiente formulario para conectarse con nuestros expertos.  ¡Estamos emocionados de saber de usted!
            </p>
            @include('contact.service_request')
        </div>
        <div class="right">
            <h2>
                <span class="creative">Empresas que confían en nuestra experiencia </span>
            </h2>
            <div class="swiper sample-slider">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="image-group">
                            <img src="img/corporation/2.jpeg" alt="Imagen 1">
                            <img src="img/corporation/5.jpeg" alt="Imagen 1">
                            <img src="img/corporation/3.jpeg" alt="Imagen 1">
                            <img src="img/corporation/4.jpeg" alt="Imagen 1">
                            <img src="img/corporation/5.jpeg" alt="Imagen 1">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-group">
                            <img src="img/corporation/6.jpeg" alt="Imagen 1">
                            <img src="img/corporation/7.jpeg" alt="Imagen 1">
                            <img src="img/corporation/8.jpeg" alt="Imagen 1">
                            <img src="img/corporation/9.jpeg" alt="Imagen 1">
                            <img src="img/corporation/10.jpeg" alt="Imagen 1">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="image-group">
                            <img src="img/corporation/11.jpeg" alt="Imagen 1">
                            <img src="img/corporation/12.jpeg" alt="Imagen 1">
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>



        </div>
    </section>

    <script type="text/javascript" src="{{asset('js/advice.js')}}"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        const swiper = new Swiper('.sample-slider', {
            loop: true,                         //loop
            direction: "vertical",              //slide direction
            autoplay: {                         //autoplay
                delay: 4000,
            },
            pagination: {                       //pagination(dots)
                el: '.swiper-pagination',
            },
            navigation: {                       //navigation(arrows)
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        })
    </script>

</body>
</html>

@endsection
