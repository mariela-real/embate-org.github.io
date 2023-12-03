@extends('layouts.main', ['activePage' => 'how_to_work', 'titlePage' => __('Como trabajamos')])
@section('content')
<div class="content">
    <div id="body_content1" class="content_page active">
    <div class= "row">

        <div class = "col-sm-10">
            <a href="{{route('how_to_work.create')}}" class="btn btn-success">Nuevo</a>
            <table class="table table-striped">
                <thead>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Video</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    @forelse ($work as $item)
                    <tr>
                        <td>{{$item->title}}</td>
                        <td>{{$item->description}}</td>
                        <td>
                            <video width="200" controls>
                                <source src="/videos/work/{{$item->video}}" type="video/mp4">
                                Tu navegador no soporta la etiqueta de video.
                            </video>
                        </td>
                        <td>
                           <a href="{{route('how_to_work.edit', $item->id) }}" class="btn btn-success">Editar</a>
                           {!! Form::open(['method'=>'DELETE','route'=>['how_to_work.destroy',$item->id], 'style'=>'display:inline'])!!}
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

