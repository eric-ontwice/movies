@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('message'))
            <div class="col col-12" style="background-color: red; color:white">
                <p>{{ session('message') }} <a class="btn btn-warning" href="{{ url('/genders') }}"
                        role="button">Entendido</a></p>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card bg-dark text-white">
                    {{-- @if (\Auth::user()->role_id == 2)
                        <div class="col col-12">
                            <a href="{{ url('genders/create') }}">
                                <button class="btn btn-success">Agregar Género</button>
                            </a>
                        </div>
                    @endif --}}
                    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('/genders') }}">Inicio<span
                                            class="sr-only">(current)</span></a>
                                </li>
                            </ul>
                            <ul class="navbar-nav mr-auto ">
                                @if (\Auth::user()->role_id == 2)
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Genero
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ url('genders/create') }}">Crear uno nuevo</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Pelicula
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ url('movies/create') }}">Crear una nueva</a>
                                        </div>
                                    </li>
                                @endif
                            </ul>

                        </div>
                    </nav>


                    <div class="card-body ">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">

                            </div>
                        @endif
                        @foreach ($genders as $gender)
                            <div class="container">
                                <div class="card bg-dark text-white">
                                    <div class="card-header row bg-primary text-white">
                                        @include('encabezado')
                                    </div>
                                    <div class="row">

                                        @foreach ($movies as $movie)
                                            @if ($movie->name == $gender->name)
                                                <div class="card-body col col-2">
                                                    <div class="card bg-dark text-white">
                                                        <div class="card-header">
                                                            @if (\Auth::user()->role_id == 2)
                                                            <a href="{{ route('movie.destroy',$movie->id) }}" 
                                                            style="font-size: 15px;
                                                            width:19px;height:19px;
                                                            top:-9px;
                                                            right:-9px;
                                                            position:absolute;
                                                            cursor:pointer;
                                                            line-height:21px;color:red;">X</a>
                                                                <a href=" {{( route('movie.edit', $movie->id))}} " style="color: #FFFFFF; text-decoration: none;">
                                                                    {{ $movie->title }}
                                                                </a>
                                                            @else
                                                                {{ $movie->title }}
                                                            @endif
                                                        </div>
                                                        <div class="card-body">
                                                            <img style="width: 100%; height: 25%;" src="{{ $movie->image }}"
                                                                alt="">
                                                            <p>{{ $movie->release_year }}</p>
                                                            {{--
                                                        </div>
                                                        <div class="card-footer"> --}}
                                                            <a href="{{ url('/peliculas/' . $movie->id) }}">
                                                                <button class="btn btn-primary">Ver más</button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('genders._js_sweetAlert')
@endsection
