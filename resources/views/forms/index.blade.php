@extends('layouts.app')

@section('content')
    <div class="container">
        <h2> Seguimiento a cotizaciones <a href="forms/create"><button type="button" class="btn btn-success float-right">Agregar cotizacion
                    </button></a> </h2>
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
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Especificaciones</th>
                    <th scope="col">Dimensiones</th>
                    <th scope="col">Referencia</th>
                    <th scope="col">Tipo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($forms as $form)
                    <tr>
                        <th scope="row">{{ $form->id }}</th>
                        <td>{{ $form->correo }}</td>
                        <td>{{ $form->especificaciones }}</td>
                        <td>{{ $form->dimensiones}}</td>
                        <td>{{ $form->referencia}}</td>
                        <td>{{ $form->tipo}}</td>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>

    </div>
@endsection
