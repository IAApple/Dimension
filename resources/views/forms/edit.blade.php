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
        <form action="{{ route('forms.update', $form->id) }}" enctype="multipart/form-data">
            @csrf


                <div class="form-group col-md-6">
                    <label>Correo Electronico</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                        placeholder="Ingresa tu correo electronico" value="{{ $form->email }}">
                </div>
                <div class="form-group col-md-6">
                    <label>Especificaciones</label>
                    <input type="text" name="especificaciones" class="form-control" placeholder="Especificaciones..." value="{{ $form->especificaciones }}">
                </div>


                <div class="form-group col-md-6">
                    <label>Dimensiones</label>
                    <input type="text" class="form-control" name="dimensiones" placeholder="Dimensiones (Opcional)" value="{{ $form->dimensiones}}">
                </div>
                <div class="form-group col-md-6">
                    <label>Referencia</label>
                    <input type="text" class="form-control" name="referencia" placeholder="Referencia (Opcional)"value="{{ $form->referencia }}">
                </div>

                <div class="form-group col-md-6">
                    <label>Tipo</label>
                    <input type="text" class="form-control" name="tipo" placeholder="Tipo "value="{{ $form->tipo }}">
                </div>



                <div class="row">
                    <button type="submit" class="btn btn-primary">Guardar</button>

                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </div>
        </form>
    </div>


@endsection
