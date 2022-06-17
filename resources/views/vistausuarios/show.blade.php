@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/estilos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

</head>
<body>
    <br>
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">
                <div class="about-text go-to">
                    <h1 class="dark-color">{{ $user->name }}</h1>
                    <h6 class="theme-color lead">{{$user->ocupacion }}</h6>
                    <h6 class="dark-color">Contacto: {{ $user->email }}</h6>
                    <p>{{ $user->descripcion }}</p>
                    <div class="row about-list">

                        <div class="d-flex justify-content-left">
                            <div class="content text-center">


                            </div>
                            <div class="d-flex justify-content-left">
                                <div class="content text-center">
                                    <div>
                                        <h2 class="mb"> Habilidades</h2>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">

                                                <h3 class="progress-title">Ilustración</h3>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width:{{ $user->habilidad1 }}%; background:#97c513;">
                                                        <div class="progress-value">{{ $user->habilidad1 }}%</div>
                                                    </div>
                                                </div>
                                                <h3 class="progress-title">Dibujo digital</h3>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width:{{ $user->habilidad2 }}%; background:#f2545b;">
                                                        <div class="progress-value">{{ $user->habilidad2 }}%</div>
                                                    </div>
                                                </div>
                                                <h3 class="progress-title">Dibujo tradicional</h3>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width:{{ $user->habilidad3 }}%; background:#4286f4;">
                                                        <div class="progress-value">{{ $user->habilidad3 }}%</div>
                                                    </div>
                                                </div>
                                                <h3 class="progress-title">Pixel Art</h3>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width:{{ $user->habilidad4 }}%; background:#21ff63;">
                                                        <div class="progress-value">{{ $user->habilidad4 }}%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <p>&nbsp;&nbsp;</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 ">
                <div class="about-avatar">
                    <img src="{{ asset('imagenes/' . $user->imagen) }}" class="img-circle"
                        height="420">

                </div>
            </div>
           
        </div>

    </div>
    <br>
    
</body>
</html>
@endsection
