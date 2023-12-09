@extends('layouts.main', ['activePage' => 'process_pre_incubation', 'titlePage' => __('Gestion de la seccion pre incubación emprendedora')])
@section('content')
<div class="container-fluid">
    <div class= "row">

        <div class = "col-sm-10">
            {!! Form::open(['route'=>['process_motivation.update', $process], 'method'=>'PUT','files'=>true])!!}
            @csrf
            <div class = "jumbotron">
                <div class = "form-group">
                    <label for="title">Ingrese un titulo</label>
                    {!! Form::text('title',$process->title, ['class'=>'form-control','maxlength'=>'67'])!!}
                    @if ($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                    @endif
                </div>
                <div class = "form-group">
                    <label for="description">Ingrese la descripcion</label>
                    {!! Form::textarea('description',$process->description, ['class'=>'ckeditor form-control'])!!}
                    @if ($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <div class = "form-group">
                    <label for="urlphoto">Imagen</label> <br>
                    <img src="/img/process/{{ $process->urlphoto }}" >

                    {!! Form::file('urlphoto') !!}
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

<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
