@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">Géneros</div> --}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            
                        </div>
                    @endif

                    @foreach ($genders as $gender)
                    <div class="container">
                        <div class="card">
                            <div class="card-header"><h4>{{ $gender->name }}</h4></div>
                            <div class="row">
                                <div class="card-body col col-3">
                                    <div class="card">
                                        <div class="card-header">Película 1</div>
                                        <div class="card-body">
                                            <img style="width: 100%; height: 25%;" src="https://www.indiewire.com/wp-content/uploads/2020/08/netflix.jpg?w=780" alt="">
                                            <p>Esto es la descripción de la película</p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="{{ url('/peliculas/' . 1) }}">
                                                <button class="btn btn-primary">Ver más</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body col col-3">
                                    <div class="card">
                                        <div class="card-header">Película 2</div>
                                        <div class="card-body">
                                            <img style="width: 100%; height: 25%;" src="https://www.indiewire.com/wp-content/uploads/2020/08/netflix.jpg?w=780" alt="">
                                            <p>Esto es la descripción de la película</p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="{{ url('/peliculas/' . 1) }}">
                                                <button class="btn btn-primary">Ver más</button>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="card-body col col-3">
                                    <div class="card">
                                        <div class="card-header">Película 3</div>
                                        <div class="card-body">
                                            <img style="width: 100%; height: 25%;" src="https://www.indiewire.com/wp-content/uploads/2020/08/netflix.jpg?w=780" alt="">
                                            <p>Esto es la descripción de la película</p>
                                        </div>
                                        <div class="card-footer">
                                            <a href="{{ url('/peliculas/' . 1) }}">
                                                <button class="btn btn-primary">Ver más</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection