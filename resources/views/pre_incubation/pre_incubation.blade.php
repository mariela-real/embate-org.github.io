@extends('navbar.navbar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title></title>
    <link rel="stylesheet" href="{{asset('css/pre_incubation.css')}}">
</head>
<body>
    <!-- content__preIncubation controla toda la pagina de pre encubacion-->
    <div class="content__preIncubation">
        <!-- preIncubation_title controla un div diseñado para el titulo, linea blanca y el texto-->
        <div class="preIncubation_title">
            <div class="line"></div>
            <h1>
                PRE ENCUBACION
            </h1>
            <p>
                El proceso ded pre incubación se basa en campamentos
                de planes de negocio, lanzar convocatorias públicas a pre incubación,
                en este proceso se realizan las primeras tutorias y apoyo a los de fueron
                preseleccionados y se realiza las primeras evaluaciones
            </p>
        </div>
        <!-- preIncubation__logo controla la parte del logo de la pagina-->
        <div class="preIncubation__logo">
                <img src="{{asset('img/plan.jpeg')}}" alt="">

        </div>
    </div>

    <div class="text_dinamic" id="originalContent">
        <div class="items">
            <div class="item">
                <h3>Campamento de planes de negocio</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="item">
                <h3>Convocatoria a pre incubación</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="item">
                <h3>Proceso de pre selección</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="item">
                <h3>Tutorías iniciales</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="item">
                <h3>Primera evaluación</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>

        </div>
        <div class="textos">
            <div class="texto">Los campamentos de planes de
                negocio presenta los emprendedores la posibilidad de conocer
                herramientas, metodologías que enseñen a fortalecer el conocimiento
                de la elaboración de planes de negocios adecuados para su
                emprendimiento.</div>
            <div class="texto">La incubadora de empresas de base
                tecnológica EMBATE lanza las convocatorias públicas.</div>
            <div class="texto">El proceso de pre selección de los proyectos
                busca realizar la primera depuración de los proyectos, este proceso no
                limita el numero de seleccionados.</div>
            <div class="texto">Las tutorías iniciales son los primeros apoyos que se
                brinda de manera directa de la incubadora a los emprendedores
                preseleccionados. En estas tutorías se debe realizar un acta de
                recomendaciones al proyecto.</div>
            <div class="texto">La primera evaluación se la realiza de manera mas
                especifica con la participación de tribunales y unidades académicas de
                la facultad de ciencias y tecnología que podrían tener interés en
                incubar al emprendedor.<br>
                Para realizar esta evaluación se mandarán cartas a estas unidades
                indicando hora y lugar de la presentación, consistiendo en 2 tiempos:<br>
                1.- El emprendedor tendrá 15 min para realizar su exposición.<br>
                2.- El emprendedor tendrá 20 min para responder las consultas del
                tribunal .<br>
                El tribunal es responsable de la segunda depuración.<br>
                Se programará una reunión técnica especifica con las unidades
                interesadas en apoyar el proceso de incubación.
                </div>
        </div>
    </div>


    <div class="text_dinamic" id="replacementContent" style="display: none;">
        <div class="items">
            <div class="item ">
                <h3>Campamento de planes de negocio <i class="fa-solid fa-angle-right"></i> </h3>
                <div class="textos">
                    <div class="texto" >Los campamentos de planes de
                        negocio presenta los emprendedores la posibilidad de conocer
                        herramientas, metodologías que enseñen a fortalecer el conocimiento
                        de la elaboración de planes de negocios adecuados para su
                        emprendimiento.</div>
                </div>
            </div>
            <div class="item  ">
                <h3>Convocatoria a pre incubación <i class="fa-solid fa-angle-right"></i> </h3>

                <div class="textos">
                    <div class="texto">La incubadora de empresas de base
                        tecnológica EMBATE lanza las convocatorias públicas.</div>
                </div>
            </div>
            <div class="item">
                <h3>Proceso de pre selección <i class="fa-solid fa-angle-right"></i> </h3>

                <div class="textos">
                    <div class="texto">El proceso de pre selección de los proyectos
                        busca realizar la primera depuración de los proyectos, este proceso no
                        limita el numero de seleccionados.</div>
                </div>
            </div>
            <div class="item">
                <h3>Tutorías iniciales <i class="fa-solid fa-angle-right"></i></h3>

                <div class="textos">
                    <div class="texto">Las tutorías iniciales son los primeros apoyos que se
                        brinda de manera directa de la incubadora a los emprendedores
                        preseleccionados. En estas tutorías se debe realizar un acta de
                        recomendaciones al proyecto.</div>
                </div>
            </div>
            <div class="item">
                <h3>Primera evaluación <i class="fa-solid fa-angle-right"></i></h3>

                <div class="textos">
                    <div class="texto">La primera evaluación se la realiza de manera mas
                        especifica con la participación de tribunales y unidades académicas de
                        la facultad de ciencias y tecnología que podrían tener interés en
                        incubar al emprendedor.<br>
                        Para realizar esta evaluación se mandarán cartas a estas unidades
                        indicando hora y lugar de la presentación, consistiendo en 2 tiempos:<br>
                        1.- El emprendedor tendrá 15 min para realizar su exposición.<br>
                        2.- El emprendedor tendrá 20 min para responder las consultas del
                        tribunal .<br>
                        El tribunal es responsable de la segunda depuración.<br>
                        Se programará una reunión técnica especifica con las unidades
                        interesadas en apoyar el proceso de incubación.</div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('js/pre_incubation.js')}}"></script>
</body>
</html>
@endsection
