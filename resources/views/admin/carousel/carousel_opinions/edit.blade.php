@extends('layouts.main', ['activePage' => 'process', 'titlePage' => __('Procesos')])
@section('content')
<div class="container-fluid">
    <div class= "row">

        <div class = "col-sm-10">
            {!! Form::open(['route'=>['opinions_carousel.update', $carousel], 'method'=>'PUT','files'=>true])!!}
            @csrf
            <div class = "jumbotron">

                <div class = "form-group">
                    <label for="description">Ingrese la descripcion</label>
                    <br>
                    {!! Form::textarea('description',$carousel->description, ['class'=>'ckeditor form-control'])!!}
                    @if ($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif

                </div>
                <div class = "form-group">
                    <label for="name">Ingrese un nombre</label>
                    <br>
                    {!! Form::text('name',$carousel->name, ['class'=>'form-control','maxlength'=>'67'])!!}
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif

                </div>
                <div class = "form-group">
                    <label for="order">Ingrese un orden</label>
                    <br>
                    {!! Form::text('order',$carousel->order, ['class'=>'form-control','maxlength'=>'67'])!!}
                    @if ($errors->has('order'))
                    <span class="text-danger">{{ $errors->first('order') }}</span>
                    @endif

                </div>
            </div>
            {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}

        </div>
    </div>

</div>

@endsection

<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
