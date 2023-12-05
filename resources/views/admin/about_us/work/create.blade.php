@extends('layouts.main', ['activePage' => 'how_to_work', 'titlePage' => __('Como trabajamos')])
@section('content')
<div class="container-fluid">
    <div class= "row">

        <div class = "col-sm-10">
            {!! Form::open(['route'=>['how_to_work.store'],'method'=>'POST','files'=>true])!!}

            <div class = "jumbotron">
                <div class = "form-group">
                    <label for="title">Ingrese un titulo</label>
                    {!! Form::text('title',null, ['class'=>'form-control','maxlength'=>'67'])!!}
                </div>
                <div class = "form-group">
                    <label for="description">Ingrese la descripcion</label>
                    {!! Form::textarea('description',null, ['class'=>'ckeditor form-control'])!!}
                </div>
                <div class = "form-group">
                    <label for="video">Seleccione un video</label> <br>
                    @if(isset($work) && $work->video)
                        <video width="320" height="240" controls>
                            <source src="/videos/work/{{ $work->video }}" type="video/mp4">
                            Tu navegador no soporta el tag de video.
                        </video>
                        <br>
                    @endif
                    {!! Form::file('video') !!}
                </div>
            </div>
            {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}

        </div>
    </div>
</div>

@endsection

<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
