<?php

namespace App\Http\Controllers;

use App\Models\{Bank};

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    /**
     * 
     */
    public function getUserData(Request $request) {                                
        //dd('getUserData');
        //Validaciones
        //dd($request);
        $rulesUser = $this->rulesUser();
        //dd($rulesUser);
        //dd($request->all());
        $validator = Validator::make($request->all(), $rulesUser);        
        
        //if ($validator->fails()) {return dd('fails');}else{return dd('no fallo, sin errores');}

        if ($validator->fails()) {
            return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
        }

        // Registrar variables de sesión
        $sessionVar=$this->sessionUser($request);
        
        return view('users.address');
    }

    public function getUserAddress(Request $request) {
        //dd('getUserAddress');
        //Validaciones        
        //dd($request);
        $messages     = $this->mensajesValidacion();
        $rulesAddress = $this->rulesAddress();
        //dd($rulesAddress);
        //dd($request->all());
        
        $validator = Validator::make($request->all(),$rulesAddress,$messages);
        //dd($validator);
        //if ($validator->fails()) {return dd('fails');}else{return dd('sin errores');}

//FIXME:@error 'POST'
        if ($validator->fails()) {
            return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
        }        
        //dd('paso');
        // Registrar variables de sesión        
        $sessionVar=$this->sessionAddress($request);
        
        //Consulta de datos de la tabla banks
        $banks = Bank::all();

        return view('users.bank_info')->with(compact([
                                                        'banks'
                                                    ]));
    }

    

    public function rulesUser(){
        $rules =[
                'name'      => ['required', 'string', 'max:255'],
                'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password'  => ['required', 'string', 'min:8', 'confirmed'],
                'birthdate' => ['required', 'date'] 
        ];
        return $rules;
    }

    public function rulesAddress(){
        $rules =[        
                'address'       => 'required',
                'number'        => 'required|integer',
                'colony'        => 'required',
                'municipality'  => 'required',
                'postal_code'   => 'required|integer',
        ];
        return $rules;
    }
    
    // Registrar variables de sesión
    public function sessionUser($request){
        // Registrar variables de sesión
        session(['user_name'        => $request->name]);
        session(['user_lastname'    => $request->lastname]);
        session(['user_email'       => $request->email]);
        session(['user_password'    => $request->password]);
        session(['user_birthdate'   => $request->birthdate]);
    }

    public function sessionAddress($request){
        // Registrar variables de sesión
        session(['address'       => $request->address]);
        session(['number'        => $request->number]);
        session(['colony'        => $request->colony]);
        session(['municipality'  => $request->municipality]);
        session(['postal_code'   => $request->postal_code]);
    }
    
    public function mensajesValidacion()
    {
        $messages = [                        
            'address.required'       => 'Recuerda ingresar la direccion',            
            'number.required'        => 'Recuerda ingresar el numero de tu casa',
            'number.integer'         => 'El numero de tu casa debe ser un numero entero',
            'colony.required'        => 'Recuerda ingresar la colonia',            
            'municipality.required'  => 'Recuerda ingresar el municipio',            
            'postal_code.required'   => 'Recuerda ingresar el codigo postal ',
            'postal_code.integer'    => 'Ingresar el codigo postal a 5 digitos',
        ];
        return $messages;
    }
}
