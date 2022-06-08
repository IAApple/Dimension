@extends ('layouts.app')

@section ('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3">
          <h3>Editar usuario: {{$user->name}}</h3>
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
        <form action="{{route('usuarios.update', $user->id)}}" method="POST">
        @method('PATCH')
        @csrf
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" name="name" value="{{$user->name}}"aria-describedby="emailHelp" placeholder="Ingresa tu nombre">
    </div>
    <div class="form-group">
        <label for="email">Correo Electronico</label>
        <input type="email" class="form-control" name="email" value="{{$user->email}}" aria-describedby="emailHelp" placeholder="Ingresa tu correo electronico">
      </div>
    <button type="submit" class="btn btn-primary">Subir</button>
    <button type="reset" class="btn btn-danger">Cancelar</button>
  </form>
</div>
</div>
</div>
@endsection