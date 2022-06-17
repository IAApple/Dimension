@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Editar usuario</h2>
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
        <form action="{{ route('usuarios.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @method('PATCH')

            @csrf
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="name" value="{{ $user->name }}"
                        placeholder="Ingresa tu nombre">
                </div>
                <div class="form-group col-md-6">
                    <label>Correo Electronico</label>
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}"
                        aria-describedby="emailHelp" placeholder="Ingresa tu correo electronico">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Contraseña<span class="small">(Opcional)</span></label>
                    <input type="password" name="password" class="form-control" placeholder="Contraseña">
                </div>
                <div class="form-group col-md-6">
                    <label>Confirme Contraseña<span class="small">(Opcional)</span></label>
                    <input type="password" name="password_confirmation" class="form-control"
                        placeholder="Confirme Contraseña">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Ocupación</label>
                    <input type="text" class="form-control" name="ocupacion" value="{{ $user->ocupacion }}"
                        placeholder="Ocupacion (Opcional)">
                </div>
                <div class="form-group col-md-6">
                    <label>Estado</label>
                    <select class="browser-default custom-select" class="form-control" name="estado" value="{{ $user->estado }}" placeholder="Estado (Opcional)">
                        <option value="no">Seleccione uno...</option>
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="Baja California">Baja California</option>
                        <option value="Baja California Sur">Baja California Sur</option>
                        <option value="Campeche">Campeche</option>
                        <option value="Chiapas">Chiapas</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="CDMX">Ciudad de México</option>
                        <option value="Coahuila">Coahuila</option>
                        <option value="Colima">Colima</option>
                        <option value="Durango">Durango</option>
                        <option value="Estado de México">Estado de México</option>
                        <option value="Guanajuato">Guanajuato</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Jalisco">Jalisco</option>
                        <option value="Michoacán">Michoacán</option>
                        <option value="Morelos">Morelos</option>
                        <option value="Nayarit">Nayarit</option>
                        <option value="Nuevo León">Nuevo León</option>
                        <option value="Oaxaca">Oaxaca</option>
                        <option value="Puebla">Puebla</option>
                        <option value="Querétaro">Querétaro</option>
                        <option value="Quintana Roo">Quintana Roo</option>
                        <option value="San Luis Potosí">San Luis Potosí</option>
                        <option value="Sinaloa">Sinaloa</option>
                        <option value="Sonora">Sonora</option>
                        <option value="Tabasco">Tabasco</option>
                        <option value="Tamaulipas">Tamaulipas</option>
                        <option value="Tlaxcala">Tlaxcala</option>
                        <option value="Veracruz">Veracruz</option>
                        <option value="Yucatán">Yucatán</option>
                        <option value="Zacatecas">Zacatecas</option>
                      </select>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Descripcion</label>
                    <input type="text" class="form-control" name="descripcion" value="{{ $user->descripcion }}"
                        placeholder="Descripcion (Opcional)">
                </div>
                <div class="form-group col-md-6">
                    <label>Enlace a PayPal</label>
                    <input type="text" class="form-control" name="enlace_cot"  value="{{ $user->enlace_cot }}" placeholder="Enlace...">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Habilidad - 1</label>
                    <input type="text" class="form-control" name="habilidad1" value="{{ $user->habilidad1 }}" placeholder="Habilidad (Opcional)">
                </div>
                <div class="form-group col-md-6">
                    <label>Habilidad - 2</label>
                    <input type="text" class="form-control" name="habilidad2" value="{{ $user->habilidad2 }}" placeholder="Habilidad (Opcional)">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Habilidad - 3</label>
                    <input type="text" class="form-control" name="habilidad3" value="{{ $user->habilidad3 }}" placeholder="Habilidad (Opcional)">
                </div>
                <div class="form-group col-md-6">
                    <label>Habilidad - 4</label>
                    <input type="text" class="form-control" name="habilidad4" value="{{ $user->habilidad4 }}" placeholder="Habilidad (Opcional)">
                </div>
            </div>
            

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Rol</label>
                    <select name="rol" class="form-control">
                        <option selected disabled>Selecciona un rol...</option>
                        @foreach ($roles as $role)
                            @if ($role->name == str_replace(['["', '"]'], '', $user->tieneRol()))
                                <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
                            @else
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Imagen</label>
                    <input type="file" name="imagen" class="form-control">
                    @if ($user->imagen != '')
                        <img src="{{ asset('imagenes/') }}" alt="{{ $user->imagen }}" height="50px" width="50px">
                    @endif
                </div>
                <div class="row">
                    <div class="form-group col-md-5">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <button type="reset" class="btn btn-danger">Cancelar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
