<?php

namespace App\Http\Controllers;

use App\Models\{Gender, Movie};

use Illuminate\Http\Request;

class GenderController extends Controller
{
    public function index() {        
        $movies          = Movie::join('genders','genders.id','=','movies.gender_id')
                         ->select('movies.id','title','release_year','image','genders.name')
                         ->get();
        $genders         = Gender::all();
        //dd($movies);
        
        return view('genders.index')->with(compact([
            'movies','genders'
        ]));
    }
}
