@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Crear nueva cotizacion</h2>
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

            <h3>Asegurate que el artista tiene peticiones abiertas</h3>
            <div class="form-group col-md-6">
                <label>Su correo Electronico </label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                    placeholder="Ingresa tu correo electronico">
            </div>

            <div class="form-group col-md-6">
                <label>Correo electronico del artista que le interesa </label>
                <input type="text" class="form-control" name="cuentaUsuario" placeholder="Correo...">
            </div>

            <div class="form-group col-md-6">
                <label>Especificaciones</label>
                <div class="form-group">
                    <textarea name="especificaciones" class="form-control" idplaceholder="Especificaciones..." rows="5"
                        id="comment"></textarea>
                </div>
            </div>


            <div class="form-group col-md-6">
                <label>Dimensiones</label>
                <input type="text" class="form-control" name="dimensiones" placeholder="Dimensiones (Opcional)">
            </div>
            <div class="form-group col-md-6">
                <label>Referencia</label>
                <input type="text" class="form-control" name="referencia" placeholder="Referencia (Opcional)">
            </div>

            <div class="form-group col-md-6">
                <label>Tipo</label>
                <input type="text" class="form-control" name="tipo" placeholder="Tipo ">
            </div>

            {{-- <div class="row">
                <a href="https://paypal.me/dimensioncomis" target="_blank">
                    <div class="btn btn-primary">Proceder al pago</div>
                </a>
                
            </div> --}}

            <br>
            <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary">Subir </button>

                <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
        </form>
    </div>


@endsection
