@extends('layouts.main', ['activePage' => 'aboutUs_carousel', 'titlePage' => __('Carruserl "a cerca de nosotros"')])
@section('content')
<div class="container-fluid">
    <div class= "row">

        <div class = "col-sm-10">
            {!! Form::open(['route'=>['aboutUs_carousel.update', $carousel], 'method'=>'PUT','files'=>true])!!}
            <div class = "jumbotron">
                <div class = "form-group">
                    <label for="title">Ingrese un titulo</label>
                    {!! Form::text('title',$carousel->title, ['class'=>'form-control','maxlength'=>'67'])!!}
                    @if ($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif

                </div>
                <div class = "form-group">
                    <label for="description">Ingrese la descripcion</label>
                    {!! Form::textarea('description',$carousel->description, ['class'=>'ckeditor form-control'])!!}
                    @if ($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
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
                    <label for="urlphoto">Seleccione una imagen</label>
                    <img src="/img/carousel/{{$carousel->urlphoto}}">
                    @if ($errors->has('urlphoto'))
                    <span class="text-danger">{{ $errors->first('urlphoto') }}</span>
                    @endif
                    {!! Form::file('urlphoto')!!}
                </div>
            </div>
            {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}

        </div>
    </div>

</div>

@endsection

<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
