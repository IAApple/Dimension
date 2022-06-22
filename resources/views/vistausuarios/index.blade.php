@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/estilos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <br>
    <div class="container">
        <h2> Nuestros artistas
            <div class="float-right">
                <form class="form-inline ml-3">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" name="search" type="search" placeholder="Buscar"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
            </div>
            </form>
            <h6>

                @if ($search)
                    <div class="alert alert-primary" role="alert">
                        Resultados de la busqueda '{{ $search }}' :
                    </div>
                @endif
            </h6>
            <h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Ocupacion</th>
                            <th scope="col">Imagen</th>
                            <th scope="col"></th>

                        </tr>
                    </thead>
                    <tbody>
                        </h1>

                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->ocupacion }}</td>
                                <td>
                                    <img src="{{ asset('imagenes/' . $user->imagen) }}" class="img-circle"
                                    height="50px">
            
                                </td>
                                <td>

                                    <a href="{{ route('vistausuarios.show', $user->id) }}"><button type="button"
                                            class="btn btn-secondary btn-lg">Ver perfil</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
                <div class="row">
                    <div class="mx-auto">
                        {{ $users->links() }}
                    </div>
                </div>
    </div>
</body>
</html>
@endsection
