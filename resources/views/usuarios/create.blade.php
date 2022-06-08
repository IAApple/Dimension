@extends ('layouts.app')

@section ('content')
<div class="container">
    <div class="row">
        <div class="col-sm-1"></div>
<form action="/usuarios" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Ingresa tu nombre">
    </div>
    <div class="form-group">
        <label for="email">Correo Electronico</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Ingresa tu correo electronico">
      </div>
    <div class="form-group">
      <label for="password">Contrasena</label>
      <input type="password" class="form-control" name="password" placeholder="Contrasena...">
    </div>
    <button type="submit" class="btn btn-primary">Subir</button>
    <button type="reset" class="btn btn-danger">Cancelar</button>
  </form>
</div>
</div>
</div>
@endsection