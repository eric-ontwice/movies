@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-header d-flex justify-content-center row bg-warning text-black">
            <b>Editar la pelicula {{ $movie->title }}</b>
        </div>
        <form action="{{ route('movie.update',$movie->id) }}" method="POST">
            @csrf
        @include('movies._form')
    </form>
    </div>
@endsection
