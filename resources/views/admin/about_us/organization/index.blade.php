@extends('layouts.main', ['activePage' => 'organization', 'titlePage' => __('Equipo Embate')])
@section('content')
<div class="container-fluid">
    <div id="body_content1" class="content_page active">
    <div class= "row">

        <div class = "col-sm-10">
            <a href="{{route('team_profile.create')}}" class="btn btn-success">Nuevo</a>
            <table class="table table-striped">
                <thead>
                    <th>Mision</th>
                    <th>Vision</th>
                    <th>Valores</th>
                    <th>Accion</th>
                </thead>
                <tbody>
                    @forelse ($team as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{!!$item->description!!}</td>
                        <td><img src="/img/team/{{$item->urlphoto}}" width="200"></td>
                        <td>
                           <a href="{{route('team_profile.edit', $item->id) }}" class="btn btn-success">Editar</a>
                           {!! Form::open(['method'=>'DELETE','route'=>['team_profile.destroy',$item->id], 'style'=>'display:inline'])!!}
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

