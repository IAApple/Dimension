@extends('layouts.app')

@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Numero de cotizacion: {{ $forms->id }}</h1>
            <p class="lead">Correo electronico: {{ $forms->email }}</p>
            <p class="lead">Especificaciones: {{ $forms->especificaciones }}</p>
            <p class="lead">Dimensiones: {{ $forms->dimensiones }}</p>
            <p class="lead">Referencia: {{ $forms->referencia }}</p>
            <p class="lead">Tipo de dibujo: {{ $forms->tipo }}</p>
        </div>
        
    </div>
@endsection
