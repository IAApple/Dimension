@extends('layouts.app')

@section('content')
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
                                <div class="ratings"> <span class="product-rating">4.6</span><span>/5</span>
                                    <div class="stars"> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                            class="fa fa-star"></i> </div>
                                    <div class="rating-text"> <span> 46 Calificaciones y 15 Opiniones</span> </div>
                                </div>
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSfxUcpSn77675XkIlxNU2UvPY2hFTZyKReI3TXnggYGVm_4UA/viewform?usp=sf_link">
                                <button type="submit" class="btn btn-primary">Cotizacion</button>
                                </a>

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
                                                    <div class="progress-bar" style="width:65%; background:#97c513;">
                                                        <div class="progress-value">65%</div>
                                                    </div>
                                                </div>
                                                <h3 class="progress-title">Dibujo digital</h3>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width:100%; background:#f2545b;">
                                                        <div class="progress-value">100%</div>
                                                    </div>
                                                </div>
                                                <h3 class="progress-title">Dibujo tradicional</h3>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width:75%; background:#4286f4;">
                                                        <div class="progress-value">75%</div>
                                                    </div>
                                                </div>
                                                <h3 class="progress-title">Pixel Art</h3>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width:98%; background:#21ff63;">
                                                        <div class="progress-value">98%</div>
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

                </div>
            </div>
        </div>

    </div>
    <br>
    <div class="row text-center text-lg-start">
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid rounded" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid rounded" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid rounded" src="https://source.unsplash.com/EUfxH-pze7s/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid rounded" src="https://source.unsplash.com/M185_qYH8vg/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid rounded" src="https://source.unsplash.com/sesveuG_rNo/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid rounded" src="https://source.unsplash.com/AvhMzHwiE_0/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid rounded" src="https://source.unsplash.com/2gYsZUmockw/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid rounded" src="https://source.unsplash.com/EMSDtjVHdQ8/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid rounded" src="https://source.unsplash.com/8mUEy0ABdNE/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid rounded" src="https://source.unsplash.com/G9Rfc1qccH4/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid rounded" src="https://source.unsplash.com/aJeH0KcFkuc/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid rounded" src="https://source.unsplash.com/p2TQ-3Bh3Oo/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid rounded" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid rounded" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid rounded" src="https://source.unsplash.com/EUfxH-pze7s/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid rounded" src="https://source.unsplash.com/M185_qYH8vg/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid rounded" src="https://source.unsplash.com/sesveuG_rNo/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid rounded" src="https://source.unsplash.com/AvhMzHwiE_0/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid rounded" src="https://source.unsplash.com/2gYsZUmockw/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid rounded" src="https://source.unsplash.com/EMSDtjVHdQ8/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid rounded" src="https://source.unsplash.com/8mUEy0ABdNE/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid rounded" src="https://source.unsplash.com/G9Rfc1qccH4/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid rounded" src="https://source.unsplash.com/aJeH0KcFkuc/400x300" alt="">
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-6">
            <a href="#" class="d-block mb-4 h-100">
                <img class="img-fluid rounded" src="https://source.unsplash.com/p2TQ-3Bh3Oo/400x300" alt="">
            </a>
        </div>
    </div>
@endsection
