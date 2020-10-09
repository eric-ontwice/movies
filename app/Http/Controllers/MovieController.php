<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use App\Models\Movie;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $movies          = Movie::join('genders', 'genders.id', '=', 'movies.gender_id')
            ->select('movies.id', 'title', 'release_year', 'image', 'genders.name')
            ->get();

        $genders         = Gender::all();

        return view('genders.index')->with(compact([
            'movies', 'genders'
        ]));
    }

    public function show($pelicula_id) {        
        $movie          = Movie::join('genders','genders.id','=','movies.gender_id')                         
                         ->where('movies.id','=',$pelicula_id)
                         ->get();
        
        return view('movies.show')->with(compact([
            'movie'
        ]));
    }
}
