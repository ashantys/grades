@extends('layouts.app')

@section('content')
    @foreach ($actividades as $actividad)
        {{$actividad->tipo}}
    @endforeach
@endsection
