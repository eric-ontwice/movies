<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Ver detalla de película
     */
    public function show($pelicula_id) {
        // Obtener detalle de la pelicula con el id $pelicula_id
        //$movie = Movie::all()->where('id','=',$pelicula_id);
        //dd($movie);        
        $movie          = Movie::join('genders','genders.id','=','movies.gender_id')                         
                         ->where('movies.id','=',$pelicula_id)
                         ->get();
        //return view('movies.show', ['movie' =>  Movie::findOrFail($pelicula_id)]);
        //return view('movies.show')->with('movie');
        return view('movies.show')->with(compact([
            'movie'
        ]));
    }
}
