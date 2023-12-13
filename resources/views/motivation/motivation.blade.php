@extends('navbar.navbar')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Título de tu página</title>
    <link rel="stylesheet" href="{{ asset('css/motivation.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://kit.fontawesome.com/13fe1b16d3.js" crossorigin="anonymous"></script>

</head>

<body>
    @isset($process)
        @if(is_object($process))
            <div class="content__motivation">
                <div class="text">
                    <div class="line"></div>
                    <h1>{{ $process->title }}</h1>
                    <p>{!! $process->description !!}</p>
                </div>
                <!-- motivation__logo controla el logo de la pagina motivacion -->
                <div class="motivation__logo">
                    <img src="{{ asset('img/process/' . $process->urlphoto) }}" alt="">
                </div>
            </div>
        @endif
    @endisset

    <!-- motivation_grid controla toda la parte del grid de la pagina de motivacion emprendedora -->
    <div class="motivation_grid">
        <!-- grid-container es la clase asociada a grid la cual permite controlar el numero de columnas y todo lo relacionado -->
        <div class="grid-container">
            <!-- grid__item controla cada una de los items ya sea titulo , imagen , descripcion y el boton de ver mas-->
            <div class="grid__item">
                <h2>Talleres y cursos</h2>
                <img src="{{ asset('img/mark.jpg') }}" alt="">
                <p>La Incubadora de Empresas de Base Tecnológica está comprometida con la necesidad de los emprendedores. 🤝
                    ¡No te pierdas nuestro curso de marketing 100% gratuito!  </p>
                <button type="submit" class="button__link2">
                    <a href="https://forms.gle/YNPuxEaX9APVUV4d6">Ver más</a>
                </button>
            </div>

            <div class="grid__item">
                <h2>Recursos</h2>
                <img src="{{ asset('img/periodico.jpg') }}" alt="">
                <p>¡Descubre el fascinante mundo de la innovación en nuestro periódico!
                    Sumérgete en las emocionantes actividades de nuestra Incubadora de Empresas de Base Tecnológica y mantente al tanto de las últimas actividades en emprendimiento. 🚀📰 </p>
                    <button type="submit" class="button__link2">
                        <a href="https://drive.google.com/file/d/1yB46cyFvdZ2cqdGf_bxXm_uXN6h96pew/view?fbclid=IwAR2EVzqjpezH4FTuQ_OrQZCV-MRYBeFYFXZ55aDCbAcSf6adR8vyYPHhQWw">Ver más</a>
                    </button>
            </div>

            <div class="grid__item">
                <h2>Eventos</h2>
                <img src="{{ asset('img/401842295_669057992004429_426031761365349069_n.jpg') }}" alt="">
                <p>Se tiene  la invitación al foro Internacional de Innovación y Tecnología, donde visionarios de todo el mundo se reunirán para inspirar y explorar ideas de base tecnológica.
                    ¡Activatech 2023!.</p>
                <button type="submit" class="button__link2">
                    <a href="https://icam.clicket.bo/evento/activatechcbba2023">Ver más</a>
                </button>


            </div>
        </div>
    </div>

    <div class="content_swiper">
        <!-- Slider tipo swiper -->
        <div class="swiper">
            <!-- clase que controla todo el slide -->
            <div class="swiper-wrapper">
                @forelse ($carousel as $item)
                    <div class="swiper-slide">
                        <h1>Testimonios de nuestros emprendedores</h1>
                        <i class="fa-solid fa-quote-left icon_start"></i>
                        <h4>Conoce algunas de nuestras experiencias</h4>
                        <p>{!! $item->description !!}</p>
                        <h3>{{ $item->name }}</h3>
                        <i class="fa-solid fa-quote-right icon_end"></i>
                    </div>
                @empty
                    <!-- Mensaje o comportamiento para cuando no hay elementos en el carousel -->
                @endforelse
            </div>
            <!-- botones previo y siguiente del slide -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/motivation.js') }}"></script>
</body>

</html>
@endsection
