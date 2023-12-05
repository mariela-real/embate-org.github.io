@extends('layouts.main', ['activePage' => 'how_to_work', 'titlePage' => __('Como trabajamos')])
@section('content')
<div class="container-fluid">
    <div class= "row">

        <div class = "col-sm-10">
            {!! Form::open(['route'=>['how_to_work.update', $work], 'method'=>'PUT','files'=>true])!!}
            <div class = "jumbotron">
                <div class = "form-group">
                    <label for="title">Ingrese un titulo</label>
                    {!! Form::text('title',$work->title, ['class'=>'form-control','maxlength'=>'67'])!!}
                </div>
                <div class = "form-group">
                    <label for="description">Ingrese la descripcion</label>
                    {!! Form::textarea('description',$work->description, ['class'=>'ckeditor form-control'])!!}
                </div>
                <div class = "form-group">
                    <label for="video">Seleccione un video</label> <br><br><br>
                    <source src="/videos/work/{{$work->video}}" type="video/mp4">
                    {!! Form::file('video')!!}
                </div>
            </div>
            {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}

        </div>
    </div>

</div>

@endsection

<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
