@extends('navbar.navbar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
</head>
<body>
    <!-- conten__about controla toda la pagina acerca de, y clase text controla todo el texto de informacion-->
    <div class="content__about">

        <div class="text">
            <h1>
                ¿QUIENES SOMOS?
            </h1>
            <div class="line"></div>

            <p>
                Somos EMBATE, la incubadora de empresas de base tecnológica que apoya a emprendedores en la creación y
                 desarrollo de nuevas empresas. Liderada por el Msc. Rodrigo Carlos Echeverría Herrera y respaldada
                  por el Instituto de Investigación de la Facultad de Ciencias y Tecnología, EMBATE
                  es el lugar donde las ideas se convierten en realidades empresariales.
            </p>
        </div>

    </div>
    <!-- content controla todo el slider de imagenes y textos de la pagina acerca de -->
    <div class="content">
        <!-- Slider tipo swiper -->
      <div class="swiper">
        <!-- clase q controla todo el slide -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          @forelse ($carousel as $item)
          <div class="swiper-slide">
            <img src="img/carousel/{{$item->urlphoto}}" alt="">
            <div class="text-overlay left">

                <h2>
                    {{$item->title}}
                </h2>
                <p>
                   {{$item->description}}
                </p>
            </div>
          </div>
          @empty
          @endforelse

       </div>
        <!-- clase slide paginacion -->
        <div class="swiper-pagination"></div>

        <!-- botones previo y siguiente del slide
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> -->

        <!-- scrollbar del slide
        <div class="swiper-scrollbar"></div> -->
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="{{asset('js/about.js')}}"></script>
</body>

</html>
@endsection
