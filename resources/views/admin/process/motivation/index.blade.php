@extends('layouts.main', ['activePage' => 'motivation', 'titlePage' => __('Gestion de la seccion motivacion emprendedora')])
@section('content')
<div class="content">
    <div id="body_content1" class="content_page active">
    <div class= "row">

        <div class = "col-sm-10">
            {{--<a href="{{route('process_motivation.create')}}" class="btn btn-success">Nuevo</a>--}}
            <table class="table table-striped">
                <thead>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Foto</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    @forelse ($process as $item)
                    <tr>
                        <td>{{$item->title}}</td>
                        <td>{!!$item->description!!}</td>
                        <td><img src="/img/process/{{$item->urlphoto}}" width="200"></td>
                        <td>
                           <a href="{{route('process_motivation.edit', $item->id) }}" class="btn btn-success">Editar</a>
                           {!! Form::open(['method'=>'DELETE','route'=>['process_motivation.destroy',$item->id], 'style'=>'display:inline'])!!}
                           {!! Form::submit('Eliminar', ['class'=>'btn btn-success']) !!}
                           {!! Form::close() !!}
                       </td>
                    </tr>

                    @empty

                    @endforelse
                </tbody>

            </table>

        </div>
    </div>

</div>

@endsection

