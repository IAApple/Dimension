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
                        <h1 class="display-4">¿Como funcionamos?</h1>
                        <p class="lead text-muted mb-0">Los moderadores revisarán periodicamente la ventana de cotizaciones
                            en espera de una nueva, esto con el fin de que actúen como los intermediarios dentro de la
                            compra.
                        </p>
                        <br>
                        <p class="lead text-muted mb-0">
                            Cuando una cotización aparezca, el moderador debe ponerse en contacto con el artista, con el fin
                            de comentarle sobre la cotización requerida, entonces se queda a la espera de una respuesta.
                        </p>
                        <br>
                        <p class="lead text-muted mb-0">
                            Una vez la respuesta llega, se enviará un correo al usuario donde se informará sobre si fue
                            aceptada o rechazada (En caso de ser rechazada, se recomienda invitarle a realizar una nueva
                            cotización con otro artista), de ser aceptada, se le enviará el precio y el moderador le
                            proporcionará una clave con el fin de saber a qué cotización se da seguimiento.
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
