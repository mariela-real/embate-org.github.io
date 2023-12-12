@extends('layouts.main', ['activePage' => 'process', 'titlePage' => __('Procesos')])
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-10">
            {!! Form::open(['route'=>['opinions_carousel.store'],'method'=>'POST','files'=>true])!!}
            @csrf
            <div class="jumbotron">
                <div class="form-group">

                    <label for="description">Ingrese una descripción</label>
                    {!! Form::textarea('description',null, ['class'=>'ckeditor form-control'])!!}
                    @if ($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                    @endif


                </div>
                <div class="form-group">
                    <label for="name">Ingrese un nombre</label>
                    {!! Form::text('name',null, ['class'=>'form-control'])!!}
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif

                </div>
                <div class="form-group">
                    <label for="order">Ingrese un orden</label>
                    {!! Form::text('order',null, ['class'=>'form-control'])!!}
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
