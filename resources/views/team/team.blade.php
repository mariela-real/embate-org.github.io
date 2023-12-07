@extends('navbar.navbar')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title></title>
    <link rel="stylesheet" href="{{asset('css/team.css')}}">
</head>

<body>
    <!-- content__team controla el texto de equipo y el botón contactar y el logo -->
    <div class="content__team">

        <div class="text">
            <div class="line"></div>
            <h1>
                Conoce al equipo de EMBATE
            </h1>
            <div>
                <!-- Corregir la etiqueta del botón cerrándola correctamente -->
                <button type="submit" class="button__start">
                    <a href="/service" class="button__start">Contáctenos</a>
                </button>
            </div>
        </div>
        <!-- team__logo controla el logo de la pagina team -->
        <div class="team__logo">
            <img src="{{asset('img/equipoEmbate.png')}}" alt="">
        </div>

    </div>
    <!-- team_grid controla toda la parte del grid de empleados -->
    <div class="team_grid">
        <div class="grid-container">
            @forelse ($team as $item)
                <div class="grid__item">
                    <img src="img/team/{{$item->urlphoto}}" alt="">
                    <h4>{{$item->name}}</h4>
                    <h5>{!!$item->description!!}</h5>
                    <br>

                    @if ($item->urllinkedin)
                        <a href="{{$item->urllinkedin}}" target="_blank" class="button__link">LinkedIn</a>
                    @endif
                    @if ($item->urlidneed) <!-- Corregir el nombre de la variable -->
                        <a href="{{$item->urlidneed}}" target="_blank" class="button__link">Idneed</a>
                    @endif
                    @if ($item->urlxing)
                        <a href="{{$item->urlxing}}" target="_blank" class="button__link">Xing</a>
                    @endif
                    @if ($item->urlangelList)
                        <a href="{{$item->urlangelList}}" target="_blank" class="button__link">AgelList</a>
                    @endif
                </div>
            @empty
            @endforelse
        </div>
    </div>

</body>

</html>
@endsection
