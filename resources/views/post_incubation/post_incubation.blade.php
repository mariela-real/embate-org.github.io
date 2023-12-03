@extends('navbar.navbar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title></title>
    <link rel="stylesheet" href="{{asset('css/post_incubation.css')}}">
</head>
<body>
    <!-- content__postIncubation controla toda la pagina de post encubacion-->
    <div class="content__postIncubation">
        <!-- postIncubation_title controla un div diseñado para el titulo, linea blanca y el texto-->
        <div class="postIncubation_title">
            <div class="line"></div>
            <h1>
                POS INCUBACION
            </h1>
            <p>
                En este punto se seguirá manteniendo contacto con las empresas
                incubadas para realizar estudios de los diferentes datos que generaron.
            </p>
        </div>
        <!-- postIncubation__logo controla la parte del logo de la pagina-->
        <div class="postIncubation__logo"> 
                <img src="{{asset('img/preIncubacion.jpg')}}" alt="">
                
        </div>
    </div>

    <div class="text_dinamic" id="originalContent">
        <div class="items">
            <div class="item">
                <h3>Seguimiento pos incubación</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="item">
                <h3>Asociación empresarial</h3>
                <i class="fa-solid fa-arrow-right"></i>
            </div>
        
            
        </div>
        
        
        <div class="textos">
            <div class="texto">Posterior al proceso de incubación se
                mantendrá contacto con el emprendedor para analizar los datos y
                estadísticas que fueron generando.</div>
            <div class="texto">Embate buscará una asociación del
                emprendedor con programas empresariales y/o asociaciones externas,
                este proceso de dará únicamente mediante la decisión del emprendedor.</div>

        </div>
    </div>


    <div class="text_dinamic" id="replacementContent" style="display: none;">
        <div class="items">
            <div class="item ">
                <h3>Seguimiento pos incubación<i class="fa-solid fa-angle-right"></i> </h3>
                <div class="textos">
                    <div class="texto" >Posterior al proceso de incubación se
                        mantendrá contacto con el emprendedor para analizar los datos y
                        estadísticas que fueron generando.</div>
                </div>
            </div>
            <div class="item  ">
                <h3>Asociación empresarial<i class="fa-solid fa-angle-right"></i> </h3>
                
                <div class="textos">
                    <div class="texto">Embate buscará una asociación del
                        emprendedor con programas empresariales y/o asociaciones externas,
                        este proceso de dará únicamente mediante la decisión del
                        emprendedor.</div>
                </div>
            </div>
            
         
            
        </div>
        
        
       
    </div>


    <script type="text/javascript" src="{{asset('js/post_incubation.js')}}"></script>
</body>



   
</html>
@endsection