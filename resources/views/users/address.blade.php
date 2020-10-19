@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card-header">{{ __('Domicilio') }}</div>

                <div class="card-body">
                    {{-- <form method="POST" action="{{ route('store-address') }}"> --}}
                    <form method="POST" action="{{ route('store-address') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Direccion</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder="Ingresa tu domicilio">
                                </div>                                
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                                
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Numero</label>
                                    <input type="number" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" placeholder="Ingresa el numero de casa">
                                </div>                                
                                @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Colonia</label>
                                    <input type="text" class="form-control @error('colony') is-invalid @enderror" name="colony" value="{{ old('colony') }}" placeholder="Ingresa tu colonia">
                                </div>                                
                                @error('colony')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                                
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Municipio</label>
                                    <input type="text" class="form-control @error('municipality') is-invalid @enderror" name="municipality" value="{{ old('municipality') }}" placeholder="Ingresa tu municipio">                                    
                                </div>                                
                                @error('municipality')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Codigo postal</label>
                                    <input type="number" class="form-control @error('postal_code') is-invalid @enderror" name="postal_code" value="{{ old('postal_code') }}" placeholder="Ingresa tu codigo postal">
                                </div>                                
                                @error('postal_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                                
                            </div>
                                                        
                        </div>                                                
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
