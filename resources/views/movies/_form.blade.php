{{-- TODO:Required --}}
<!--col-lg-6-->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row bg-dark text-white">
    <div class="col-sm-4">
        <table border="1" class="table table-hover">
            <div class="form-group">
                <label for="">Titulo</label>
                <input type="text" class="form-control" name="title" placeholder="Ingresa el titulo de la pelicula"
                    value="{{ old('title', $movie->title) }}" autocomplete="off">
            </div>

            <div class="form-group">
                <label for="">Fecha de lanzamiento</label>
                <input type="date" class="form-control" name="release_date"
                    value="{{ old('release_date', $movie->release_date) }}" autocomplete="off">
            </div>

            <div class="form-group">
                <label for="">Duracion en minutos</label>
                <input type="text" class="form-control" name="duration" placeholder="Ingresa la duracion"
                    value="{{ old('duration', $movie->duration) }}" autocomplete="off">
            </div>

            <div class="form-group">
                <label for="">Link de la imagen</label>
                <input type="text" class="form-control" name="image" placeholder="Ingresa la url de la imagen"
                    value="{{ old('image', $movie->image) }}" autocomplete="off">
            </div>

            <div class="form-group">
                <label for="">Genero</label>
                <select name="gender_id" class="form-control">
                    @foreach ($genders as $gender)
                        <option value="{{ $gender->id }}" {{ $movie->gender_id == $gender->id ? 'selected' : '' }}>
                            {{ $gender->name }}
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="">Clasificacion</label>
                <select name="classification" class="form-control">
                        <option value="{{ $movie->classification }}">{{ $movie->classification }}</option>                    
                        <option value="AA">AA</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="B15">B15</option>
                        <option value="C">C</option>
                        <option value="D">D</option>                                        
                </select>
            </div>

        </table>
    </div>

    <div class="col-sm-5">
        <table border="1" class="table table-hover">
            <div class="form-group">
                <label for="">Sinopsis</label>
                <textarea name="synopsis" rows="18" cols="40" class="form-control input-xlarge" spellcheck="false"
                    data-gramm="false" autocomplete="off" spellcheck="false" data-gramm="false">
                {{ old('synopsis', $movie->synopsis) }}
                </textarea>
            </div>
            <div class="d-flex justify-content-around">
                <button type="submit" class="btn btn-success">Aceptar</button>
                <button type="reset" class="btn btn-light">Reset</button>
                <a href="{{ route('genders.index') }}"><input type="button" value="Salir"
                        class="btn btn-danger"></input></a>
            </div>
        </table>
    </div>

    <div class="col-sm-3">
        <table border="1" class="table table-hover">
            <div class="form-group">
                <img src="{{ $movie->image }}" style="padding-top: 20%; width: 300x; height: 400px;">
            </div>
        </table>
    </div>
</div>
