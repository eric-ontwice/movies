@extends('layouts.app')

@section('content')
    <form action="{{ route('gender.store') }}" method="POST" id="MyFormCreate">
        @csrf
        <div class="form-group col col-6 row" align="center" style="padding-left: 20%">
            <label for="">Ingresa el Genero: </label>
            <input type="text" class="form-control" name="name" placeholder="Ingresa el nombre del genero">
            <br>
            <button type="submit" class="btn btn-primary">Aceptar</button>
            <a name="" id="" class="btn btn-danger" href="{{ url('/genders') }}" role="button">Salir</a>
        </div>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @include('genders._js_sweetAlert')
@endsection
