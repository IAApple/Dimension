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
        <title>Document</title>
    </head>

    <body>

        <tbody>
            <div class="bg-light">
                <div class="container py-5">
                    <div class="row h-100 align-items-center py-5">
                        <div class="col-lg-6">
                            <h1 class="display-4">Proceso de pago</h1>
                            <p class="lead text-muted mb-0">Realize su pago, recuerde adjuntar el codigo que se le
                                proporcionó vía correo electronico en el asunto del pago con el fin de ser capaces de dar
                                seguimiento e identificar su pedido.</p>
                            </p>

                            <div class="container">
                                <a href="https://paypal.me/dimensioncomis" target="_blank"><button type="button" class="btn btn-dark btn-lg">Proceder a pago
                                    </button></a>
                                <form class="form-inline ml-3">
                                    <div class="input-group input-group-sm">


                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="col-lg-6 d-none d-lg-block"> <img src="\dist\img\Dimension\Dimension-LogoB.png"
                                alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

        </tbody>
        </div>

    </body>

    </html>
@endsection
