@extends('layouts.app')

@section('content')
    <div class="form-group col col-6 row " align="center" style="padding-left: 20%">
    <form action="{{ route('gender.update',$gender->id) }}" method="POST">
        @csrf
            <div class="row">
                <label for="">Editar el genero de: {{ $gender->name }}</label>
                <input type="text" name="name" value="{{ old('name', $gender->name) }}" class="form-control"
                    placeholder="Ingresa el nombre del genero">
                <button type="submit" class="btn btn-success">Editar</button>
                <a name="" id="" class="btn btn-danger" href="{{ url('/genders') }}" role="button">Salir</a>    
            </div>
        </form>
    </div>
@endsection
