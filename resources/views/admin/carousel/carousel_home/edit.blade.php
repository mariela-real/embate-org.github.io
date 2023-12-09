@extends('layouts.main', ['activePage' => 'carousel', 'titlePage' => __('Administracion de la pagina de inicio')])
@section('content')
<div class="container-fluid">
    <div class= "row">

        <div class = "col-sm-10">
            {!! Form::open(['route'=>['carousel.update', $carousel], 'method'=>'PUT','files'=>true])!!}
            @csrf
            <div class = "jumbotron">
                <div class = "form-group">
                    <label for="link">Ingrese un enlace</label>
                    {!! Form::text('link',$carousel->link, ['class'=>'form-control','maxlength'=>'67'])!!}
                    @if ($errors->has('link'))
                    <span class="text-danger">{{ $errors->first('link') }}</span>
                    @endif
                </div>
                <div class = "form-group">
                    <label for="order">Ingrese un orden</label>
                    {!! Form::text('order',$carousel->order, ['class'=>'form-control','maxlength'=>'67'])!!}
                    @if ($errors->has('order'))
                    <span class="text-danger">{{ $errors->first('order') }}</span>
                    @endif
                </div>
                <div class = "form-group">
                    <label for="urlphoto">Imagen</label>
                    <img src="/img/carousel/{{$carousel->urlphoto}}">
                    {!! Form::file('urlphoto')!!}
                    @if ($errors->has('urlphoto'))
                    <span class="text-danger">{{ $errors->first('urlphoto') }}</span>
                    @endif
                </div>
            </div>
            {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}

        </div>
    </div>

</div>

@endsection

