@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Crear nueva cotizacion</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <form action="/forms" method="POST" enctype="multipar/form-data">
            @csrf


                <div class="form-group col-md-6">
                    <label>Correo Electronico</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                        placeholder="Ingresa tu correo electronico">
                </div>
                <div class="form-group col-md-6">
                    <label>Especificaciones</label>
                    <input type="text" name="especificaciones" class="form-control" placeholder="Especificaciones...">
                </div>


                <div class="form-group col-md-6">
                    <label>Dimensiones</label>
                    <input type="text" class="form-control" name="ocupacion" placeholder="Ocupacion (Opcional)">
                </div>
                <div class="form-group col-md-6">
                    <label>Referencia</label>
                    <input type="text" class="form-control" name="estado" placeholder="Estado (Opcional)">
                </div>

                <div class="form-group col-md-6">
                    <label>Tipo</label>
                    <input type="text" class="form-control" name="descripcion" placeholder="Descripcion (Opcional)">
                </div>



                <div class="row">

                    <button type="submit" class="btn btn-primary">Subir</button>

                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </div>
        </form>
    </div>


@endsection
