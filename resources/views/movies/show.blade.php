@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body row">
                        @foreach ($movie as $movie)

                            <div class="col col-6" align="center">
                                <h2>{{ $movie->title }}</h2>
                                <img style="width: 70%; height: 70%;" src="{{ $movie->image }}" alt="">
                            </div>
                            <div class="col col-6">
                                <table border="1">
                                    <thead>
                                        <tr class="table bg-dark text-white">
                                                <th>Género</th>
                                                <th>Fecha de estreno</th>
                                                <th>Año de Salida</th>
                                                <th>Duración</th>
                                                <th>Clasificacion</th>                                            
                                        </tr>
                                    </thead>
                                    <tbody align="center">
                                        <tr>
                                            <td>{{ $movie->name }}</td>
                                            <td>{{ $movie->release_date }}</td>
                                            <td>{{ $movie->release_year }}</td>
                                            <td>{{ $movie->duration }} min</td>
                                            <td>{{ $movie->classification }}</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr align="center" class="table bg-dark text-white">
                                            <th colspan="6">Sinopsis</th>
                                        </tr>
                                        <tr>
                                            <th colspan="6" class="text-justify">{{ $movie->synopsis }}</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <a href="{{ route('genders.index') }}"><input type="button" value="Salir"
                                        class="btn btn-danger"></input></a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
