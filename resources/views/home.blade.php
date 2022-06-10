@extends('layouts.app')

@section('content')
<div id="container">
    <header>
        <div class="bg-image d-flex justify-content-center align-items-center" style=" background-image: url('dist/img/fondoF.jpg'); height: 100vh;">
            <div style="position:relative; right:-650px; top:-270px;">

            </div>
            <div style="position:relative; right:50px;">
                <img src="\dist\img\Dimension\Dimension-LogoW3.png">
            </div>
    </header>

    <section id="content">
        <article class="articulo">
            <div class="row text-center text-lg-start">
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="{{ url("/imagenC") }}" class="d-block mb-4 h-100">
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
            <hr class="mt-2 mb-3">
            <h2 class="text-center">Artistas populares</h2>
            <br>
            <hr class="mt-2 mb-3">
            <a href="{{ url("/profile") }}">
            <h2 class="text-center">Liefheart12</h2>
            </a>
        </article>

        <article class="articulo2">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 rounded" src="dist/img/hu-tao.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 rounded" src="dist/img/xiao.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 rounded" src="dist/img/zhongli.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </article>
        <hr class="mt-2 mb-3">
        <h2 class="text-center">ANya2</>

        </article>

        <article class="articulo2">
            <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 rounded" src="dist/img/hu-tao.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 rounded" src="dist/img/xiao.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 rounded" src="dist/img/zhongli.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <br>
            <hr class="mt-2 mb-3">
            <div class="row text-center text-lg-start">
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="https://source.unsplash.com/pWkk7iiCoDM" class="d-block mb-4 h-100">
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
        </article>
    </section>
    <hr class="mt-2 mb-3">
    <footer>
        DIMENSION 
    </footer>
</div>

</div>
@endsection
