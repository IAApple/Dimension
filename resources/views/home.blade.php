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

        <style>

        </style>
        <!-- Bootstrap 4 -->

        <title>Document</title>
    </head>

    <body>

        <div class="bg-image d-flex justify-content-center align-items-center"
            style=" background-image: url('dist/img/Dimension_BACK1.png'); height: 100vh;">
            <div class="justify-content-center text-center">
                
                <img src="\dist\img\Dimension\Dimension-LogoW4.png">
                <div id="carouselContent" class="carousel slide" data-ride="carousel">

                    <div class="container">
                        <div class="carousel-inner text-center text-white m-auto" role="listbox">
                            <div class="carousel-item active text-center p-12">
                                <div class="user_text mb-3">
                                    <p style="font-size:20px;" class="mbr-fonts-style display-7">
                                        <strong>
                                            Date a conocer como artista
                                        </strong><br>
                                    </p>
                                </div>
            
                            </div>
                            <div class="carousel-item text-center p-12">
            
                                <div class="user_text mb-3">
                                    <p style="font-size:20px;" class="mbr-fonts-style display-7">
                                        <strong>
                                            Ten seguridad en tus ventas
                                        </strong><br>
                                    </p>
                                </div>
            
                            </div>
                        </div>
                    </div>
                        <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                </div>
            </div>
            
            
        </div>
        <br>
         <div class="container">
            
        <div class="row">
            <div class="col">
                <div class="card-columns">
                    @foreach ($files as $file)
                        <div class="card">
                            
                            <img class="card-img-top" src="{{ asset($file->url) }}" alt="">
                            
                        </div>
                    @endforeach
                </div>
                {{$files->links()}}
            </div>
        </div>
    </div>
    </body>
 
    </html>
@endsection
