<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\{Gender, Movie};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenderController extends Controller
{
    
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
