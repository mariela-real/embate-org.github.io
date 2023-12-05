@extends('layouts.main', ['activePage' => 'team', 'titlePage' => __('Equipo Embate')])
@section('content')
<div class="container-fluid">
    <div class= "row">

        <div class = "col-sm-10">
            {!! Form::open(['route'=>['team_profile.update', $team], 'method'=>'PUT','files'=>true])!!}
            <div class = "jumbotron">
                <div class = "form-group">
                    <label for="name">Ingrese un nombre</label>
                    {!! Form::text('name',$team->name, ['class'=>'form-control','maxlength'=>'67'])!!}
                </div>
                <div class = "form-group">
                    <label for="description">Ingrese la descripcion</label>
                    {!! Form::textarea('description',$team->description, ['class'=>'ckeditor form-control'])!!}
                </div>
                <div class = "form-group">
                    <label for="urlphoto">Imagen</label> <br>
                    <img src="/img/team/{{$team->urlphoto}}" >
                    {!! Form::file('urlphoto')!!}
                </div>
                <div class = "form-group">
                    <label for="urlprofile">Ingrese su perfil de linkedin</label>
                    {!! Form::text('urlprofile',$team->urlprofile, ['class'=>'form-control','maxlength'=>'67'])!!}
                </div>
            </div>
            {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}

        </div>
    </div>

</div>

@endsection

<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
