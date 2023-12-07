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
                <div class="form-group">
                    <label>Perfiles públicos</label>
                    <div class="redes-sociales">
                        <label for="linkedin">
                            <input type="checkbox" name="redes_sociales[]" value="linkedin"> LinkedIn
                        </label>
                        <label for="idneed">
                            <input type="checkbox" name="redes_sociales[]" value="idneed"> Idneed
                        </label>
                        <label for="xing">
                            <input type="checkbox" name="redes_sociales[]" value="xing"> Xing
                        </label>
                        <label for="angeList">
                            <input type="checkbox" name="redes_sociales[]" value="angeList"> AngeList
                        </label>
                    </div>
                </div>
                <div class="form-group" id="linkedin-url" style="display:none;">
                    <label for="urllinkedin">Ingrese la URL de LinkedIn</label>
                    {!! Form::text('urllinkedin', $team->urllinkedin, ['class'=>'form-control', 'maxlength'=>'255']) !!}
                </div>
                <div class="form-group" id="idneed-url" style="display:none;">
                    <label for="urlidneed">Ingrese la URL de Idneed</label>
                    {!! Form::text('urlidneed', $team->urlidneed, ['class'=>'form-control', 'maxlength'=>'255']) !!}
                </div>
                <div class="form-group" id="xing-url" style="display:none;">
                    <label for="urlxing">Ingrese la URL de xing</label>
                    {!! Form::text('urlxing', $team->urlxing, ['class'=>'form-control', 'maxlength'=>'255']) !!}
                </div>
                <div class="form-group" id="angeList-url" style="display:none;">
                    <label for="urlangelList">Ingrese la URL de angeList</label>
                    {!! Form::text('urlangelList', $team->urlangelList, ['class'=>'form-control', 'maxlength'=>'255']) !!}
                </div>
            </div>
            {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}

        </div>
    </div>

</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var redesSocialesCheckbox = document.querySelectorAll('input[name="redes_sociales[]"]');

        redesSocialesCheckbox.forEach(function (checkbox) {
            checkbox.addEventListener('change', function () {
                var redSocial = this.value;
                var campoURL = document.getElementById(redSocial + '-url');

                if (campoURL) {
                    campoURL.style.display = this.checked ? 'block' : 'none';
                }
            });
        });
    });
</script>
@endsection

<script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
