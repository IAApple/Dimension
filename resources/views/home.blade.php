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

                <img src="\dist\img\Dimension\Dimension-LogoW2.png">

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
