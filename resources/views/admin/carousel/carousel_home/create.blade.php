@extends('layouts.main', ['activePage' => 'carousel', 'titlePage' => __('Administracion de la pagina de inicio')])
@section('content')
<div class="container-fluid">
    <div class= "row">

        <div class = "col-sm-10">
            {!! Form::open(['route'=>['carousel.store'],'method'=>'POST','files'=>true])!!}

            <div class = "jumbotron">
                <div class = "form-group">
                    <label for="description">Ingrese la descripcion</label>
                    {!! Form::text('description',null, ['class'=>'form-control'])!!}
                </div>
                <div class = "form-group">
                    <label for="link">Ingrese un enlace</label>
                    {!! Form::text('link',null, ['class'=>'form-control','maxlength'=>'67'])!!}
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

