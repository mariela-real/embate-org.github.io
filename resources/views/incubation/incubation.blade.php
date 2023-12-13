@extends('navbar.navbar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title></title>
    <link rel="stylesheet" href="{{asset('css/incubation.css')}}">
</head>
<body>
    <!-- content__Incubation controla toda la pagina de  encubacion-->
    <div class="content__Incubation">

        <!-- incubation_title controla un div diseñado para el titulo, linea blanca y el texto-->
        <div class="incubation_title">
            <div class="line"></div>
            <h1>
                INCUBACION
            </h1>
            <p>
                El proceso incubación consiste en el escalonamiento empresarial donde
                el emprendedor identifica las acciones de crecimiento y desarrollo
                empresarial, realizando una evaluación del desarrollo empresarial.
            </p>
        </div>
        <!-- incubation__logo controla la parte del logo de la pagina-->
        <div class="incubation__logo">
            <img src="{{asset('img/CAMPAMENTO DE MOTIV_2.png')}}" alt="">
        </div>
    </div>

    <div class="text_dinamic" id="originalContent">
        <div class="items">
            <div class="item">
                <h3>Gestión de planificación de actividades</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="item">
                <h3>Escalonamiento empresarial</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="item">
                <h3>Acompañamiento empresarial</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="item">
                <h3>Evaluación del desarrollo empresarial</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>

        </div>


        <div class="textos">
            <div class="texto">Se realizarán talleres con los
                emprendedores para generar un programa de actividades para realizar
                durante la gestión.</div>
            <div class="texto">herramientas que ayuda al emprendedor
                a identificar el crecimiento y desarrollo empresarial, se lo realiza
                mínimamente 1 vez al año.</div>
            <div class="texto">Asesoramiento investigativo, técnico de
                la unidad, proporciona a los emprendedores los conocimientos y la dirección necesarios para optimizar sus operaciones, tomar decisiones estratégicas fundamentadas y mantenerse competitivos en su mercado</div>
            <div class="texto">Cada semestre de deberá
                realizar una evaluación a cada emprendedor de los alcances obtenidos
                donde se realizará reforzamientos de estrategias en caso de ser
                necesario.
                </div>

        </div>
    </div>


    <div class="text_dinamic" id="replacementContent" style="display: none;">
        <div class="items">
            <div class="item ">
                <h3>Gestión de planificación de actividades<i class="fa-solid fa-angle-right"></i> </h3>
                <div class="textos">
                    <div class="texto" >Se realizarán talleres con los
                        emprendedores para generar un programa de actividades para realizar
                        durante la gestión.</div>
                </div>
            </div>
            <div class="item  ">
                <h3>Escalonamiento empresarial<i class="fa-solid fa-angle-right"></i> </h3>

                <div class="textos">
                    <div class="texto">herramientas que ayuda al emprendedor
                        a identificar el crecimiento y desarrollo empresarial, se lo realiza
                        mínimamente 1 vez al año.</div>
                </div>
            </div>
            <div class="item">
                <h3>Acompañamiento empresarial<i class="fa-solid fa-angle-right"></i> </h3>

                <div class="textos">
                    <div class="texto">Asesoramiento investigativo, técnico de
                        la unidad, proporcionando a los emprendedores los conocimientos y la dirección necesarios para optimizar sus operaciones, tomar decisiones estratégicas fundamentadas y mantenerse competitivos en su mercado</div>
                </div>
            </div>
            <div class="item">
                <h3>Evaluación del desarrollo empresarial <i class="fa-solid fa-angle-right"></i></h3>

                <div class="textos">
                    <div class="texto">Cada semestre de deberá
                        realizar una evaluación a cada emprendedor de los alcances obtenidos
                        donde se realizará reforzamientos de estrategias en caso de ser
                        necesario.
                        </div>
                </div>
            </div>



        </div>



    </div>


    <script type="text/javascript" src="{{asset('js/incubation.js')}}"></script>

</body>




</html>
@endsection
