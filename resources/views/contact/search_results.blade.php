{{-- resources/views/search_results.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>Resultados de búsqueda</h1>

    @if($result->isEmpty())
        <p>No se encontraron resultados para la fecha seleccionada.</p>
    @else
        <ul>
            @foreach($result as $serviceRequest)
                <li>{{ $serviceRequest->firstname }} - {{ $serviceRequest->date }}</li>
            @endforeach
        </ul>
    @endif
@endsection
