@extends('layouts.main', ['activePage' => 'team', 'titlePage' => __('Equipo Embate')])
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-10">
            {!! Form::open(['route'=>['team_profile.store'],'method'=>'POST','files'=>true]) !!}
            <div class="jumbotron">
                <div class="form-group">
                    <label for="name">Ingrese un nombre</label>
                    {!! Form::text('name', null, ['class'=>'form-control','maxlength'=>'67']) !!}
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="description">Ingrese la descripción</label>
                    {!! Form::textarea('description', null, ['class'=>'ckeditor form-control']) !!}
                    @if ($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="urlphoto">Imagen</label> <br>
                    {!! Form::file('urlphoto') !!}
                    @if ($errors->has('urlphoto'))
                    <span class="text-danger">{{ $errors->first('urlphoto') }}</span>
                    @endif
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
                    {!! Form::text('urllinkedin', null, ['class'=>'form-control', 'maxlength'=>'255']) !!}
                </div>
                <div class="form-group" id="idneed-url" style="display:none;">
                    <label for="urlidneed">Ingrese la URL de Idneed</label>
                    {!! Form::text('urlidneed', null, ['class'=>'form-control', 'maxlength'=>'255']) !!}
                </div>
                <div class="form-group" id="xing-url" style="display:none;">
                    <label for="urlxing">Ingrese la URL de xing</label>
                    {!! Form::text('urlxing', null, ['class'=>'form-control', 'maxlength'=>'255']) !!}
                </div>
                <div class="form-group" id="angeList-url" style="display:none;">
                    <label for="urlangelList">Ingrese la URL de angeList</label>
                    {!! Form::text('urlangelList', null, ['class'=>'form-control', 'maxlength'=>'255']) !!}
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
