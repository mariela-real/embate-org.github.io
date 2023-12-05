@extends('layouts.main', ['activePage' => 'process', 'titlePage' => __('Administracion de la pagina Procesos')])
@section('content')
<div class="content">
    <div class= "row">

        <div class = "col-sm-10">
            <a href="{{route('opinions_carousel.create')}}" class="btn btn-success">Nuevo</a>

            <table class="table table-striped">
                <thead>
                    <th>Orden</th>
                    <th>Descripcion</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    @forelse ($carousels as $item)
                    <tr>
                        <td>{{$item->order}}</td>
                        <td>{!!$item->description!!}</td>
                        <td>
                           <a href="{{route('opinions_carousel.edit', $item->id) }}" class="btn btn-success">Editar</a>
                           {!! Form::open(['method'=>'DELETE','route'=>['opinions_carousel.destroy',$item->id], 'style'=>'display:inline'])!!}
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

