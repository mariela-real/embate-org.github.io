@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
@section('content')
@include('flash-message')
@yield('content')
<!-- Page Heading -->
<div calss="content"></div>

@endsection
