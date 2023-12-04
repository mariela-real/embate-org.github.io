@extends('layouts.main', ['activePage' => 'process', 'titlePage' => __('Procesos')])

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-10">
            {!! Form::open(['route'=>['opinions_carousel.store'],'method'=>'POST','files'=>true])!!}

            <div class="jumbotron">
                <div class="form-group">
                    <label for="description">Ingrese la descripcion</label>
                    {!! Form::textarea('description',null, ['class'=>'ckeditor form-control','maxlength'=>'67','id'=>'body'])!!}
                </div>
                <div class="form-group">
                    <label for="name">Ingrese un nombre</label>
                    {!! Form::text('name',null, ['class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="order">Ingrese un orden</label>
                    {!! Form::text('order',null, ['class'=>'form-control'])!!}
                </div>
            </div>
            {!! Form::submit('Guardar',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
<script>
    ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
