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
            <div class="right_images">
                <div class="image">
                    <img src="img/1.png" alt="Imagen 1">
                </div>

                <div class="image">
                    <img src="img/2.png" alt="Imagen 1">
                </div>

                <div class="image">
                    <img src="img/3.png" alt="Imagen 1">
                </div>

                <div class="image">
                    <img src="img/4.png" alt="Imagen 1">
                </div>

                <div class="image">
                    <img src="img/5.png" alt="Imagen 1">
                </div>

                <div class="image">
                    <img src="img/5.png" alt="Imagen 1">
                </div>

                <div class="image">
                    <img src="img/5.png" alt="Imagen 1">
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="{{asset('js/advice.js')}}"></script>

</body>
</html>

@endsection