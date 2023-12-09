@extends('layouts.main', ['activePage' => 'process_pre_incubation', 'titlePage' => __('Gestion de la seccion pre incubación emprendedora')])
@section('content')
<div class="content">
    <div id="body_content1" class="content_page active">
    <div class= "row">

        <div class = "col-sm-10">
            <a href="{{route('process_pre_incubation.create')}}" class="btn btn-success">Nuevo</a>
            <table class="table table-striped">
                <thead>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Foto</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    @if ($process)
                    <tr>
                        <td>{{$process->title}}</td>
                        <td>{!!$process->description!!}</td>
                        <td><img src="/img/process/{{$process->urlphoto}}" width="200"></td>
                        <td>
                           <a href="{{route('process_pre_incubation.edit', $process->id) }}" class="btn btn-success">Editar</a>
                           {!! Form::open(['method'=>'DELETE','route'=>['process_pre_incubation.destroy',$process->id], 'style'=>'display:inline'])!!}
                           {!! Form::submit('Eliminar', ['class'=>'btn btn-success']) !!}
                           {!! Form::close() !!}
                       </td>
                    </tr>

                    @else
                    <tr>
                        <td colspan="4">No hay datos disponibles</td>
                    </tr>
                    @endif
                </tbody>

            </table>

        </div>
    </div>

</div>

@endsection

