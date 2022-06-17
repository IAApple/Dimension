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
                    <input type="text" class="form-control" name="ocupacion" placeholder="Ocupacion (Opcional)">
                </div>
                <div class="form-group col-md-6">
                    <label>Estado</label>
                    <select class="browser-default custom-select" name="estado" placeholder="Estado (Opcional)">
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
                    <input type="text" class="form-control" name="descripcion" placeholder="Descripcion (Opcional)">
                </div>
                <div class="form-group col-md-6">
                    <label>Enlace a PayPal</label>
                    <input type="text" class="form-control" name="enlace_cot" placeholder="Enlace...">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Habilidad - 1</label>
                    <input type="text" class="form-control" name="habilidad1" placeholder="Habilidad (Opcional)">
                </div>
                <div class="form-group col-md-6">
                    <label>Habilidad - 2</label>
                    <input type="text" class="form-control" name="habilidad2" placeholder="Habilidad (Opcional)">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label>Habilidad - 3</label>
                    <input type="text" class="form-control" name="habilidad3" placeholder="Habilidad (Opcional)">
                </div>
                <div class="form-group col-md-6">
                    <label>Habilidad - 4</label>
                    <input type="text" class="form-control" name="habilidad4" placeholder="Habilidad (Opcional)">
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

                
            </div>
            <div class="row">

                <button type="submit" class="btn btn-primary">Subir</button>
                <br>
                <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>
        </form>
    </div>


@endsection
