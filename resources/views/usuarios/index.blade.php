@extends('layouts.app')

@section('content')
    <div class="container">
        <h2> Lista de usuarios <a href="usuarios/create"><button type="button" class="btn btn-success float-right">Agregar
                    usuario</button></a> </h2>
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
                    </form>
        <h6>
            
            @if ($search)
                <div class="alert alert-primary" role="alert">
                    Resultados de la busqueda '{{ $search }}' :
                </div>
            @endif
        </h6>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach($user->roles as $role)
                                {{$role->name}}
                            @endforeach
                        </td>
                        <td>
                            <img src="{{asset('imagenes/')}}" alt="{{$user->imagen}}" height="50px" width="50px"> 
                        </td>
                        <td>
                            <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST">
                                <a href="{{ route('usuarios.show', $user->id) }}"><button type="button"
                                        class="btn btn-secondary btn-sm">Ver</button></a>
                                <a href="{{ route('usuarios.edit', $user->id) }}"><button type="button"
                                        class="btn btn-primary btn-sm">Editar</button></a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
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
@endsection
