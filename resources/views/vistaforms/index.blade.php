@extends('layouts.app')

@section('content')
    <div class="container">
        <h2> Seguimiento a cotizaciones <a href="forms/create"><button type="button" class="btn btn-success float-right">Agregar cotizacion
                    </button></a> </h2>
                    <form class="form-inline ml-3">
                        <div class="input-group input-group-sm">

                                    
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
                        <td>
                               <a href="{{ route('forms.show', $form->id) }}"><button type="button"
                                    class="btn btn-secondary btn-sm">Ver</button></a>


                     
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>

    </div>
@endsection
