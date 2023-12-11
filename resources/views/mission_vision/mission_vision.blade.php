@extends('navbar.navbar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title></title>
    <link rel="stylesheet" href="{{asset('css/mission_vision.css')}}">
</head>
<body>
    <!-- content__mission controla toda la pagina de mision y vision-->
    <div class="content__mission">
        <!-- mission_title controla un div diseñado para el titulo y line_tricolor diseñado para la linea en gradiente-->
        <div class="mission_title">
            <h1>
                VISIÓN Y MISIÓN
            </h1>
            <div class="line_tricolor"></div>
        </div>
        <!-- mission_vision controla la parte de la vision su texto y su imagen-->
        <div class="mission_vision">
            <!-- vision__logo controla el logo de la vision-->
            <div class="vision__logo">
                <img src="{{asset('img/lupa.png')}}" alt="">

            </div>
            <div class="vision_text">
                <h2> VISIÓN</h2>
                <p>
                    Ser una unidad de referencia nacional en la
                    temática de emprendimiento e incubación,
                    buscando la vinculación de todo el sector
                    emprendedor, el estado y las unidades
                    académicas y sociales.
                </p>
            </div>

        </div>
          <!-- mission_mission controla la parte de la mision su texto y su imagen-->
        <div class="mission_mission">
            <div class="mission_text">
                <h2> MISIÓN</h2>
                <p>
                    Ser una unidad de soporte académico,
                    investigativo y de interacción para
                    emprendedores y comunidad emprendedores
                    regional, de fortalecimiento y consolidación de
                    ideas innovadoras de emprendimientos que
                    buscan ser estables y sólidos, buscando
                    contribuir al desarrollo nacional y regional.
                </p>
            </div>

            <!-- mission__logo controla el logo de la mision-->
            <div class="mission__logo">
                <img src="{{asset('img/idea.png')}}" alt="">

            </div>
        </div>




    </div>

    <!-- Seccion valores-->

    <div class="content__values">
        <!-- values_title controla un div diseñado para el titulo y line_tricolor para la parte de valores-->
        <div class="values_title">
            <h1>
                VALORES
            </h1>
            <div class="line_tricolor"></div>
        </div>
        <!-- values_list y values_item controla el titulo, imagen y descripcion de cada valor-->
        <div class="values_list">
              <div class="values_item">
                    <img src="{{asset('img/transparencia.png')}}" alt="">
                    <h1>
                        Transparencia
                    </h1>
                    <p>
                        Gestionando tanto operaciones de intermediación como trabajos
                        de elaboracion propia, siempre trasladamos todas las
                        consideraciones explícitas e implícitas, y promovemos
                        la comunicacíon entre todos los intervinientes en el
                        desarrollo de un servicio.
                    </p>
              </div>
              <div class="values_item">
                    <img src="{{asset('img/proactividad.png')}}" alt="">
                    <h1>
                        Proactividad
                    </h1>
                    <p>
                        Somos conscientes del recorrido que tenemos
                        por delante, de la dimensión que
                        tenemos y de la necesidad de actualización y mejora continua.

                    </p>
              </div>
              <div class="values_item">
                    <img src="{{asset('img/honestidad.png')}}" alt="">
                    <h1>
                        Honestidad
                    </h1>
                    <p>
                        Buscamos por iniciativa propia la solución a problemas sectoriales.
                        Nos afanamos en tratar de anticiparnos a situaciones complicadas, que
                        la inanición suele complicar.
                    </p>
              </div>
        </div>

    </div>
</body>
</html>
@endsection
