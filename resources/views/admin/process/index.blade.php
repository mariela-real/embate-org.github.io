@extends('layouts.main', ['activePage' => 'process', 'titlePage' => __('Administracion de la pagina "Procesos"')])
@section('content')
<head>

	<link rel="stylesheet" href="{{asset('css/page.css')}}">
</head>
<div class="content">
    <div class="page_header">

    <div class="btn-group">
        <button type="button" class="btn btn-success button-margin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Motivación emprendedora
        </button>
        <div class="dropdown-menu">
        <a class="dropdown-item" href="/opinions_carousel">Carrusel opiniones</a>
        <a class="dropdown-item" href="process_motivation">Procesos motivacion</a>
        </div>
    </div>
    <a class="btn btn-success button-margin" href="/process_pre_incubation">Pre incubación</a>
    <a class="btn btn-success button-margin" href="/how_to_work">Incubación</a>
    <a class="btn btn-success button-margin" href="#">Post Incubación</a>
</div>
</div>
<script type="text/javascript" src="{{asset('js/page.js')}}"></script>
@endsection

