@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card-header d-flex justify-content-center row bg-primary text-white">
            <b>Registrar una nueva pelicula</b>
        </div>
        <form action="{{ route('movie.store') }}" method="POST">
            @csrf
        @include('movies._form')
    </form>
    </div>
@endsection
