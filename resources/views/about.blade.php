@extends ('layouts.app')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/about.css" />
        <link rel="stylesheet" href="/css/estilos.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
        <title>Document</title>
    </head>

    <body>


        <div class="bg-light">
            <div class="container py-5">
                <div class="row h-100 align-items-center py-5">
                    <div class="col-lg-6">
                        <h1 class="display-4">Sobre nosotros</h1>
                        <p class="lead text-muted mb-0">Dimension es una plataforma dedicada al sector artistico,
                            especificamente dibujo digital, nuestro objetivo es lograr brindar seguridad y asistir con todo
                            el compromiso a nuestros artistas y compradores.</p>
                        </p>
                        <br>
                        <p class="lead text-muted mb-0">DIMENSION es una plataforma dedicada al público mexicano, ya que si bien, hay plataformas que
                            podrían tener rasgos similares, nosotros tratamos de abarcar lo necesario y además, cubrir un
                            público que regularmente no se toma en cuenta.
                        </p>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block"> <img src="\dist\img\Dimension\Dimension-LogoB.png"
                            alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>


    </body>

    </html>
@endsection
