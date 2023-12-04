@extends('layouts.main', ['activePage' => 'carousel', 'titlePage' => __('Administracion de la pagina de inicio')])
@section('content')
<div class="container-fluid">
    <div class= "row">

        <div class = "col-sm-10">
            {!! Form::open(['route'=>['carousel.update', $carousel], 'method'=>'PUT','files'=>true])!!}
            <div class = "jumbotron">
                <div class = "form-group">
                    <label for="description">Ingrese la descripcion</label>
                    {!! Form::text('description',$carousel->description, ['class'=>'form-control'])!!}
                </div>
                <div class = "form-group">
                    <label for="link">Ingrese un enlace</label>
                    {!! Form::text('link',$carousel->link, ['class'=>'form-control','maxlength'=>'67'])!!}
                </div>
                <div class = "form-group">
                    <label for="order">Ingrese un orden</label>
                    {!! Form::text('order',$carousel->order, ['class'=>'form-control','maxlength'=>'67'])!!}
                </div>
                <div class = "form-group">
                    <label for="urlphoto">Seleccione una imagen</label>
                    <img src="/img/carousel/{{$carousel->urlphoto}}">
                    {!! Form::file('urlphoto')!!}
                </div>
            </div>
            {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}

        </div>
    </div>

</div>

@endsection

