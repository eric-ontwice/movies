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
                            <div class="col col-6" align="center">                                
                                <table class="table row bg-dark text-white">
                                    <tbody>
                                        <tr>
                                            <td>Género</td>
                                            <td>Fecha de estreno</td>
                                            <td>Año de Salida</td>
                                            <td>Duración</td>
                                        </tr>                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>{{ $movie->name }}</th>
                                            <th>{{ $movie->release_date }}</th>
                                            <th>{{ $movie->release_year }}</th>
                                            <th>{{ $movie->duration }} min</th>
                                        </tr>
                                        <tr align="center">
                                            <th colspan="4">Sinopsis</th>
                                        </tr>
                                        <tr>
                                            <th colspan="4">{{ $movie->synopsis }}</th>
                                        </tr>
                                        
                                        
                                    </tfoot>
                                </table>
                                <a href="{{ route('genders.index') }}"><input type="button" value="Salir" class="btn btn-danger"></input></a>
                            </div>
                        @endforeach                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
