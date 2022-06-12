@extends ('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Crear nuevo usuario</h2>
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
        <form action="/usuarios" method="POST" enctype="multipar/form-data">
            @csrf

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="name" placeholder="Ingresa tu nombre">
                </div>
                <div class="form-group col-md-6">
                    <label>Correo Electronico</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp"
                        placeholder="Ingresa tu correo electronico">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Contraseña</label>
                    <input type="password" name="password" class="form-control" placeholder="Contraseña">
                </div>
                <div class="form-group col-md-6">
                    <label>Confirme Contraseña</label>
                    <input type="password" name="password_confirmation" class="form-control"
                        placeholder="Confirme Contraseña">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Ocupacion</label>
                    <input type="text" class="form-control" name="ocupacion" placeholder="Ingresa una ocupacion (Opcional)">
                </div>
                <div class="form-group col-md-6">
                    <label>Estado</label>
                    <input type="text" class="form-control" name="estado" placeholder="Ingresa un estado (Opcional)">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Rol</label>
                    <select name="rol" class="form-control">
                        <option selected disabled>Selecciona un rol...</option>
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Imagen</label>
                    <input type="file" name="imagen" class="form-control">
                </div>
                <div class="row">

                    <button type="submit" class="btn btn-primary">Subir</button>

                    <button type="reset" class="btn btn-danger">Cancelar</button>
                </div>
            </div>
        </form>
    </div>


@endsection
