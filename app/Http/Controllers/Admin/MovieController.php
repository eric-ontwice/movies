<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\{Gender,Movie};

class MovieController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isAdmin');
    }

    public function create(){
        $genders        = Gender::select('id','name')->orderBy('name','asc')->get();
        
        return view('movies.create', ['movie' => new Movie()])->with(compact(['genders']));
    }

    public function store(Request $request){
        $messages = $this->mensajesValidacion();
        $rules = $this->reglasValidacion();

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $movie                 = new Movie();

        $movie->title          = request('title');        
        $movie->release_date   = request('release_date');
        $year                  = explode("-",$movie->release_date);        
        $movie->release_year   = $year[0];        
        $movie->duration       = request('duration');
        $movie->image          = request('image');
        $movie->synopsis       = request('synopsis');
        $movie->gender_id      = request('gender_id');

        $movie->save();
        return redirect('/genders');
    }

    public function edit($id){            
        $genders        = Gender::select('genders.id','name')->orderBy('name','asc')->get();
        $movie          = Gender::join('movies', 'genders.id', '=', 'movies.gender_id') 
                         ->where('movies.id','=',$id)
                         ->first();
        //dd($movie);
        //dd($id);
        return view('movies.edit',['movie'=>$movie])->with(compact(['genders']));
    }

    public function update(Request $request, $id)
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

        $movie = Movie::findOrFail($id);        
        $movie->title = $request->get('title');
        $movie->release_date   = request('release_date');
        $year = explode("-",$movie->release_date);        
        $movie->release_year   = $year[0];        
        $movie->duration       = request('duration');
        $movie->image          = request('image');
        $movie->synopsis       = request('synopsis');
        $movie->gender_id      = request('gender_id');
        $movie->update();


        return redirect('/movies');
    }

    public function destroy($id)
    {       
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect('/movies');        
    }

    public function mensajesValidacion()
    {
        $messages = [
            'title.required'         => 'El titulo es requerido',            
            'release_date.required'  => 'La fecha de lanzamiento es requerida', 
            'release_date.date'      => 'La fecha debe ser de tipo date', 
            'duration.required'      => 'La duracion es requerida',
            'duration.integer'       => 'La duracion debe ser numerica',
            'image.required'         => 'El url de la imagen es requerido',
            'image.url'              => 'Ingresa bien url de la imagen',
            'gender_id.required'     => 'El genero es requerido',
            'gender_id.integer'      => 'Recuerda ingresar bien el genero de la pelicula',
            'synopsis.required'      => 'La sinopis es requerido',
            'synopsis.max'           => 'La sinopis debe tener menos de 2000 caracteres',
            'synopsis.require'       => 'La clasificacion es requerida',
            'classification.in'      => 'Recuerda seleccionar bien la clasificacion de la pelicula',
        ];
        return $messages;
    }

    public function reglasValidacion()
    {
        $rules = [
            'title'         => 'required',
            'release_date'  => 'required|date',            
            'duration'      => 'required|integer',
            'image'         => 'required|url',
            'gender_id'     => 'required|integer',
            'synopsis'      => 'required|max:2000',
            'classification'=> 'required|in:AA,A,B,B15,C,D',
        ];
        return $rules;
    }
}