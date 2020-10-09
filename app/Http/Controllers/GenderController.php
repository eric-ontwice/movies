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

    public function create()
    {
        return view('genders.create');
    }

    public function store(Request $request)
    {
        $messages = $this->mensajesValidacion();
        $rules = $this->reglasValidacion();

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $gender         = new Gender();
        $gender->name   = request('name');
        $gender->save();
        return redirect('/genders');
    }

    public function edit($id)
    {
        return view('genders.edit', ['gender'=>Gender::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $gender = Gender::findOrFail($id);
        $gender->name = $request->get('name');
        $gender->update();
        return redirect('/genders');
    }

    public function destroy($id)
    {
        $movies_by_Gender = Movie::where('gender_id', '=', $id)->count();

        if ($movies_by_Gender == 0) {            
            $gender = Gender::findOrFail($id);
            $gender->delete();
            return redirect('/genders');
        } else {            
            $errorDelete = 'Error: No puedes eliminar un genero que tiene peliculas en lista debe estar vacío';            
            return redirect('/genders')->with('message',$errorDelete);
        }
    }

    public function mensajesValidacion()
    {
        $messages = [
            'name.required' => 'El genero es requerido',
        ];
        return $messages;
    }

    public function reglasValidacion()
    {
        $rules = [
            'name'  => 'required'
        ];
        return $rules;
    }
}
