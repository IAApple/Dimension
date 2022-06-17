@extends('layouts.app')

@section('content')
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h2 class="display-4">Nombre de usuario: {{ $user->name }}</h2>
            <p class="lead">Correo electronico: {{ $user->email }}</p>
            <p class="lead">Estado: {{ $user->estado }}</p>
            <p class="lead">Ocupación: {{ $user->ocupacion }}</p>
            <p class="lead">Descripción: {{ $user->descripcion }}</p>
            <p class="lead">PayPal: {{ $user->enlace_cot }}</p>
            <p class="lead">Imagen de perfil: <img src="{{ asset('imagenes/' . $user->imagen) }}" height="300px"></p>
            <p class="lead">Habilidad 1: {{ $user->habilidad1 }}</p>
            <p class="lead">Habilidad 2: {{ $user->habilidad2 }}</p>
            <p class="lead">Habilidad 3: {{ $user->habilidad3 }}</p>
            <p class="lead">Habilidad 4: {{ $user->habilidad4 }}</p>
        </div>

    </div>
@endsection
