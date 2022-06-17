@extends('layouts.app')

@section('content')
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
                                <a href="{{route('files.edit', $file)}}" class="btn btn-primary">Editar</a>
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
@endsection
