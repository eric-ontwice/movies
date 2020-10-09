<?php

namespace App\Http\Controllers;

use App\Models\{Gender, Movie};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenderController extends Controller
{
    public function index()
    {
        $movies          = Movie::join('genders', 'genders.id', '=', 'movies.gender_id')
            ->select('movies.id', 'title', 'release_year', 'image', 'genders.name')
            ->get();

        $genders         = Gender::all();

        // V2
        // $movies_by_gender = [];

        // foreach ($genders as $gender) {
        //     $movies_by_gender[$gender->name] = [];

        //     // obtener peliculas pertenecientes al genero
        //     $movies2 = Movie::where('gender_id', $gender->id)
        //                     ->select('id','title','release_year','image')
        //                     ->get();

        //     $counter = 0;
        //     foreach ($movies2 as $movie) {
        //         $movies_by_gender[$gender->name][$counter]['id']            = $movie->id;
        //         $movies_by_gender[$gender->name][$counter]['title']         = $movie->title;
        //         $movies_by_gender[$gender->name][$counter]['release_year']  = $movie->release_year;
        //         $movies_by_gender[$gender->name][$counter]['image']         = $movie->image;
        //         $counter++;
        //     }
        // }
        // dd($movies_by_gender);

        return view('genders.index')->with(compact([
            'movies', 'genders'
        ]));
    }

}
