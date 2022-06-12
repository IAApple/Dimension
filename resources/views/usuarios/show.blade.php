@extends('layouts.app')

@section('content')

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Nombre de usuario: {{$user->name }}</h1>
            <p class="lead">Correo electronico:{{ $user->email }}</p>
            <p class="lead">Estado:{{ $user->estado }}</p>
            <p class="lead">Ocupacion: {{ $user->ocupacion }}</p>
        </div>
    </div>
@endsection