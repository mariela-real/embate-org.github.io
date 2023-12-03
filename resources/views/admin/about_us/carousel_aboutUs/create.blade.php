@extends('layouts.main', ['activePage' => 'aboutUs_carousel', 'titlePage' => __('Carruserl "a cerca de nosotros"')])
@section('content')
<div class="content">
    <div class= "row">

        <div class = "col-sm-10">
            {!! Form::open(['route'=>['aboutUs_carousel.store'],'method'=>'POST','files'=>true, 'enctype'=>"multipart/form-data" ])!!}

            <div class = "jumbotron">
                <div class = "form-group">
                    <label for="title">Ingrese un titulo</label>
                    {!! Form::text('title',null, ['class'=>'form-control','maxlength'=>'67'])!!}
                </div>
                <div class = "form-group">
                    <label for="description">Ingrese la descripcion</label>
                    {!! Form::text('description',null, ['class'=>'form-control'])!!}
                </div>
                <div class = "form-group">
                    <label for="order">Ingrese un orden</label>
                    {!! Form::text('order',null, ['class'=>'form-control','maxlength'=>'67'])!!}
                </div>
                <div class = "form-group">
                    <label for="urlphoto">Seleccione una imagen</label> <br>
                    <img src="/img/carousel/" >
                    {!! Form::file('urlphoto')!!}
                </div>
            </div>
            {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}

        </div>
    </div>
</div>

@endsection

