@extends('layouts.main', ['activePage' => 'about_us', 'titlePage' => __('Como trabajamos')])
@section('content')
<head>

	<link rel="stylesheet" href="{{asset('css/page.css')}}">
</head>
<div class="content">
    <h5 class="button-margin">Administracion de la pagina "A cerca de nosotros"</h5>
    <div class="page_header">

    <a class="btn btn-success button-margin" href="/aboutUs_carousel">¿Quienes somos?</a>
    <a class="btn btn-success button-margin" href="/team_profile">Nuestro equipo</a>
    <a class="btn btn-success button-margin" href="/how_to_work">Como trabajamos</a>
    <a class="btn btn-success button-margin" href="#">Mision y vision y valores</a>
</div>
</div>
<script type="text/javascript" src="{{asset('js/page.js')}}"></script>
@endsection

