@extends('layouts.app')

@section('content')
    {{-- <br>
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">
                <div class="about-text go-to">
                    <h5 class="dark-color"> {{ Auth::user()->name }}</h5>
                    <h6 class="theme-color lead">{{ Auth::user()->ocupacion }}</h6>
                    <h6 class="dark-color">Contacto: {{ Auth::user()->email }}</h6>
                    <p>{{ Auth::user()->descripcion }}</p>
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
                                                    <div class="progress-bar"
                                                        style="width:{{ Auth::user()->habilidad1 }}%; background:#97c513;">
                                                        <div class="progress-value">{{ Auth::user()->habilidad1 }}%</div>
                                                    </div>
                                                </div>
                                                <h3 class="progress-title">Dibujo digital</h3>
                                                <div class="progress">
                                                    <div class="progress-bar"
                                                        style="width:{{ Auth::user()->habilidad2 }}%; background:#f2545b;">
                                                        <div class="progress-value">{{ Auth::user()->habilidad2 }}%</div>
                                                    </div>
                                                </div>
                                                <h3 class="progress-title">Dibujo tradicional</h3>
                                                <div class="progress">
                                                    <div class="progress-bar"
                                                        style="width:{{ Auth::user()->habilidad3 }}%; background:#4286f4;">
                                                        <div class="progress-value">{{ Auth::user()->habilidad3 }}%</div>
                                                    </div>
                                                </div>
                                                <h3 class="progress-title">Pixel Art</h3>
                                                <div class="progress">
                                                    <div class="progress-bar"
                                                        style="width:{{ Auth::user()->habilidad4 }}%; background:#21ff63;">
                                                        <div class="progress-value">{{ Auth::user()->habilidad4 }}%</div>
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
                    <img src="{{ asset('imagenes/' . Auth::user()->imagen) }}" class="img-circle elevation-2"
                        height="420">
                    <p>&nbsp;&nbsp;</p>

                </div>
            </div>

            <p>&nbsp;&nbsp;</p>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="card-columns">
                            @foreach ($files as $file)
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset($file->url) }}" alt=""
                                        class="img-fluid">

                                </div>
                            @endforeach
                            <div class="col-12">
                                {{ $files->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>
    <div class="row text-center text-lg-start">

    </div> --}}

    <body>
        <br>
        <div class="container">
            <div class="card-block">
                <br>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <p>
                            <img src="{{ asset('imagenes/' . Auth::user()->imagen) }}" class="img-circle" alt=""
                                height="320">
                        </p>
                    </div>
                    <div class="col-md-8">
                        
                        <br>
                        <br>
                        <strong>
                            <h1 class="dark-color">{{ Auth::user()->name }}</h1>
                        </strong>
                        <h2 class="theme-color lead">{{ Auth::user()->ocupacion }}</h2>
                        <h6 class="dark-color">Contacto: {{ Auth::user()->email }}</h6>
                        <p>{{ Auth::user()->descripcion }}</p>
                        <div class="row about-list">

                            <div class="d-flex justify-content-left">
                                <div class="content text-center">


                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <br>

            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    {{-- <div class="col-lg-6">
                    <div class="about-text go-to">

                        <h1 class="dark-color">{{ $user->name }}</h1>
                        <h6 class="theme-color lead">{{ $user->ocupacion }}</h6>
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
                                                        <div class="progress-bar"
                                                            style="width:{{ $user->habilidad1 }}%; background:#97c513;">
                                                            <div class="progress-value">{{ $user->habilidad1 }}%</div>
                                                        </div>
                                                    </div>
                                                    <h3 class="progress-title">Dibujo digital</h3>
                                                    <div class="progress">
                                                        <div class="progress-bar"
                                                            style="width:{{ $user->habilidad2 }}%; background:#f2545b;">
                                                            <div class="progress-value">{{ $user->habilidad2 }}%</div>
                                                        </div>
                                                    </div>
                                                    <h3 class="progress-title">Dibujo tradicional</h3>
                                                    <div class="progress">
                                                        <div class="progress-bar"
                                                            style="width:{{ $user->habilidad3 }}%; background:#4286f4;">
                                                            <div class="progress-value">{{ $user->habilidad3 }}%</div>
                                                        </div>
                                                    </div>
                                                    <h3 class="progress-title">Pixel Art</h3>
                                                    <div class="progress">
                                                        <div class="progress-bar"
                                                            style="width:{{ $user->habilidad4 }}%; background:#21ff63;">
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
                        <img src="{{ asset('imagenes/' . $user->imagen) }}" class="img-circle" height="420">

                    </div>
                </div> --}}
                    <div class="container">
                        <div class="row">
                            <div class="col">

                                <div class="card-columns">
                                    @foreach ($files as $file)
                                        <div class="card">
                                            <img class="card-img-top" src="{{ asset($file->url) }}" alt=""
                                                class="img-fluid">

                                        </div>
                                    @endforeach
                                    <div class="col-12">
                                        {{ $files->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <br>

    </body>

    </html>
@endsection
