@extends('layouts.app')

@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Nombre de usuario: {{ $user->name }}</h1>
            <p class="lead">Correo electronico: {{ $user->email }}</p>
            <p class="lead">Estado: {{ $user->estado }}</p>
            <p class="lead">Ocupación: {{ $user->ocupacion }}</p>
            <p class="lead">Descripción: {{ $user->descripcion }}</p>
            <p class="lead">Enlace a cotización: {{ $user->enlace_cot }}</p>
        </div>
        
    </div>
@endsection
