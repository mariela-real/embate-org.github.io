@extends('navbar.navbar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title></title>
    <link rel="stylesheet" href="{{asset('css/work.css')}}">
    <link rel="stylesheet" href="{{asset('css/team.css')}}">
</head>
<body>

    <div class="content__work">
        @forelse ($work as $item)
        <div class="work_title">
            <h1>
              {{$item->title}}
            </h1>
            <div class="line"></div>
        </div>
        @empty
        @endforelse

        @forelse ($work as $item2)
           <div class="work_body">
                <div class="body_description">
                    <p>
                    {!!$item2->description!!}
                    </p>

                    <button type="submit" class="button__start">
                        <a href="/service" class="button__start">Contáctenos</a>
                    </button>
                </div>
                <!-- body_image controla la parte la segunda parte de la fila de contenido en la cual esta la imagen de logo-->

                <div class="body_image">
                    <video width="500" controls>
                        <source src="/videos/work/{{$item2->video}}" type="video/mp4">
                        Tu navegador no soporta la etiqueta de video.
                    </video>
                </div>
                <!-- body_items controla la parte la tercera parte de la fila de contenido en la cual estan 3 item de detalles,
                en conjunto con el body_item se controla el titulo y contenido ademas q en el titulo esta la funcion onclick-->
              <div class="body_items">
                   <div class="columna">
                        <div class="body_item">
                            <h3 class="titulo" onclick="toggleTexto(this)">Selección rigurosa</h3>
                            <div class="contenido">
                                <h5>Nuestro primer paso es la selección y evaluación meticulosa.
                                    Cada proyecto y emprendedor que se acerca a nosotros es
                                    sometido a un análisis profundo. Nuestros evaluadores y
                                    mentores de renombre examinan cada propuesta en busca
                                    de su viabilidad y potencial. Si eres seleccionado, comienza
                                    una emocionante colaboración con EMBATE.
                                </h5>
                            </div>
                        </div>
                        <div class="body_item">
                            <h3 class="titulo" onclick="toggleTexto(this)">Capacitación personalizada</h3>
                            <div class="contenido">
                                <h5>
                                    Una vez dentro de EMBATE, te ofrecemos mucho más que un
                                    simple espacio de trabajo.
                                    Aquí encontrarás capacitación y asesoramiento
                                    personalizado en áreas críticas para tu negocio, desde finanzas
                                    y marketing hasta operaciones y estrategia. No solo te damos
                                    las herramientas, sino que te enseñamos a usarlas.
                                </h5>
                            </div>
                        </div>
                        <div class="body_item">
                            <h3 class="titulo" onclick="toggleTexto(this)">Seguimiento continuo</h3>

                            <div class="contenido">
                                <h5>
                                    Reconocemos que el camino emprendedor está lleno de desafíos.
                                    Por lo tanto, en EMBATE, te ofrecemos un seguimiento constante. Realizamos reuniones periódicas con
                                    nuestros mentores para evaluar el progreso de tu proyecto y realizar ajustes si es necesario.
                                    Además, mantenemos un registro detallado de la gestión y finanzas de cada proyecto para garantizar la
                                    transparencia y responsabilidad.
                                </h5>
                            </div>

                        </div>
                  </div>
              </div>

         </div>
         @empty
         @endforelse

         <div class="content__work2">
            <div class="work_title">
                <h1>
                APOYO
                </h1>
                <div class="line"></div>
            </div>
            <div class="work_body">
                <div class="body_description">
                    <p>
                        EMBATE  es una Unidad que abre las puertas a ideas de negocio y emprendimientos que inician en esta etapa de emprender, socializar, y a dar a conocer sus productos en el mercado.
Con el apoyo de las Unidades de investigacion se otorgan estas herramientas útiles a los nuevos emprendedores.
                    </p>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-theme mt-5">
            <div class="item"><img src="img/emprendedores/1.jpeg" alt="Imagen 1"></div>
            <div class="item"><img src="img/emprendedores/3.jpeg" alt="Imagen 2"></div>
            <div class="item"><img src="img/emprendedores/33.jpeg" alt="Imagen 3"></div>
            <div class="item"><img src="img/emprendedores/2.jpeg" alt="Imagen 4"></div>
            <div class="item"><img src="img/emprendedores/55.jpeg" alt="Imagen 5"></div>

        </div>


    </div>


    <script type="text/javascript" src="{{asset('js/work.js')}}"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>
    <script>
        jQuery(document).ready(function($){
          $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
              0:{
                items:1
              },
              600:{
                items:3
              },
              1000:{
                items:4
              }
            }
          })
        })
        </script>
</body>

</html>
@endsection
