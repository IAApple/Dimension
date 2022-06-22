@extends('layouts.app')

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
     
<form action="{{ route('files.create') }}">
        <br>
        <button type="submit" class="btn btn-primary">Subir imagen</button>
        <br>
    </form>
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card-columns">
                    @foreach ($files as $file)
                        <div class="card">
                            
                            <img class="card-img-top" src="{{ asset($file->url) }}" alt="" class="img-fluid">
                            <div class="card-footer">

                                <form action="{{route('files.destroy', $file)}}" class="d-inline" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-12">
                        {{$files->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>   
@endsection
