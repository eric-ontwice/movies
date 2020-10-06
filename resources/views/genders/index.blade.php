@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">

                            </div>
                        @endif
                        @foreach ($genders as $gender)
                            <div class="container">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>{{ $gender->name }}</h4>
                                    </div>
                                    <div class="row">

                                        @foreach ($movies as $movie)                                                                                
                                                @if ($movie->name == $gender->name)
                                                    <div class="card-body col col-2">
                                                        <div class="card">
                                                            <div class="card-header">{{ $movie->title }}</div>
                                                            <div class="card-body">
                                                                <img style="width: 100%; height: 25%;"
                                                                    src="{{ $movie->image }}" alt="">
                                                            <p>{{ $movie->release_year }}</p>
                                                            </div>
                                                            <div class="card-footer">
                                                                <a href="{{ url('/peliculas/'.$movie->id) }}">
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
@endsection
