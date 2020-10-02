@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">Géneros</div> --}}

                <div class="card-body">
                    <div class="col col-12" align="center">
                        <h2>Nombre de la película</h2>
                    </div>
                    <div align="center">
                        <img style="width: 100%; height: 25%;" src="https://www.indiewire.com/wp-content/uploads/2020/08/netflix.jpg?w=780" alt="">
                    </div>
                    <div class="col col-12">
                        <div class="col col-12">
                            <h5>Detalles de la Película</h5>
                            <p>Fecha de estreno: </p>
                            <br>
                            <p>Año de Salida: </p>
                            <br>
                            <p>Duración: </p>
                            <br>
                            <p>Género: </p>
                            <br>
                        </div>
                    </div>
                    <div class="col col-12">
                        <div class="col col-12">
                            <h5>Descripción</h5>
                        </div>
                        <p>Esto es la descripción de la película</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection