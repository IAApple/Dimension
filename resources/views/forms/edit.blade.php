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


            <div class="form-group col-md-6">
                <label>Su correo electronico </label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                    placeholder="Ingresa tu correo electronico" value="{{ $form->email }}">
            </div>

            <div class="form-group col-md-6">
                <label>Correo electronico del artista que le interesa </label>
                <input type="text" class="form-control" name="cuentaUsuario" placeholder="Correo..." value="{{ $form->cuentaUsuario }}">
            </div>

            <div class="form-group col-md-6">
                <label>Especificaciones</label>
                <div class="form-group">
                    <textarea name="especificaciones" class="form-control" idplaceholder="Especificaciones..." rows="5"
                        id="comment" value="{{ $form->especificaciones }}"></textarea>
                </div>
            </div>


            <div class="form-group col-md-6">
                <label>Dimensiones</label>
                <input type="text" class="form-control" name="dimensiones" placeholder="Tamaño que necesita (Opcional)" value="{{ $form->dimensiones }}">


            </div>
            <div class="form-group col-md-6">
                <label>Dimensiones de ejemplo (Opcional) </label>
                <select class="browser-default custom-select" name="dimensiones" placeholder="Dimensiones de ejemplo..." value="{{ $form->dimensiones }}">
                    <option value="no">Seleccione uno...</option>
                    <option value="Foto de perfil de Instagram">Foto de perfil de Instagram</option>
                    <option value="Foto de portada de Facebook">Foto de portada de Facebook</option>
                    <option value="Fondo de pantalla Smartphone">Fondo de pantalla Smartphone</option>
                    <option value="Fondo de pantalla de computadora">Fondo de pantalla de computadora</option>
                  </select>
            </div>
            <div class="form-group col-md-6">
                <label>Referencia</label>
                <input type="text" class="form-control" name="referencia" placeholder="Enlace a una referencia (Opcional)" value="{{ $form->referencia }}">
            </div>

            <div class="form-group col-md-6">
                <label>Tipo de dibujo</label>
                <input type="text" class="form-control" name="tipo" placeholder="Ej. Boceto, lineart... " value="{{ $form->tipo }}">
            </div>



            <br>
            <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary">Subir </button>

                <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
        </form>
    </div>


@endsection
