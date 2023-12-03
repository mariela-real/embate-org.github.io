@extends('layouts.main', ['activePage' => 'organization', 'titlePage' => __('Equipo Embate')])
@section('content')
<div class="container-fluid">
    <div class= "row">

        <div class = "col-sm-10">
            {!! Form::open(['route'=>['mission_vision.update', $organization], 'method'=>'PUT','files'=>true])!!}
            <div class = "jumbotron">
                <div class = "form-group">
                    <label for="name">Ingrese un nombre</label>
                    {!! Form::text('name',$organization->name, ['class'=>'form-control','maxlength'=>'67'])!!}
                </div>
                <div class = "form-group">
                    <label for="description">Ingrese la descripcion</label>
                    {!! Form::text('description',$organization->description, ['class'=>'form-control'])!!}
                </div>
                <div class = "form-group">
                    <label for="urlphoto">Seleccione una imagen</label> <br>
                    <img src="/img/team/{{$organization->urlphoto}}" >
                    {!! Form::file('urlphoto')!!}
                </div>
                <div class = "form-group">
                    <label for="urlprofile">Ingrese su perfil de linkedin</label>
                    {!! Form::text('urlprofile',$organization->urlprofile, ['class'=>'form-control','maxlength'=>'67'])!!}
                </div>
            </div>
            {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}

        </div>
    </div>

</div>

@endsection

