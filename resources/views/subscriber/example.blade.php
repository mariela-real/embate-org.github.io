@extends('register.register')
@section('action')
action="{{route('inicio')}}"
@endsection
@section('fieldName1','Nombre')
@section('name1')
name="firstName"
@endsection
@section('fieldName2','Apellido')
@section('name2')
name="lastName"
@endsection
@section('fieldName3','Correo electrónico')
@section('name3')
name="email"
@endsection
@section('value3')
value="{{old('email')}}"
@endsection
@section('fields')
@endsection
