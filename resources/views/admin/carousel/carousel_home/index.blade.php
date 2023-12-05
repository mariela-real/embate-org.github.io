@extends('layouts.main', ['activePage' => 'carousel', 'titlePage' => __('Administracion de la pagina de inicio')])
@section('content')
<div class="content">
    <div class= "row">

        <div class = "col-sm-10">
            <h5>Carrusel Principal</h5>
            @can('pagina')
            <a href="{{route('carousel.create')}}" class="btn btn-success">Nuevo</a>
            @endcan
            <table class="table table-striped">
                <thead>
                    <th>Orden</th>
                    <th>Imagen</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    @forelse ($carousels as $item)
                    <tr>
                        <td>{{$item->order}}</td>
                        <td><img src="/img/carousel/{{$item->urlphoto}}" width="300"></td>
                        <td>
                           <a href="{{route('carousel.edit', $item->id) }}" class="btn btn-success">Editar</a>
                           {!! Form::open(['method'=>'DELETE','route'=>['carousel.destroy',$item->id], 'style'=>'display:inline'])!!}
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

