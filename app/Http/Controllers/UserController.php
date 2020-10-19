<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestUserAddress;
use App\Http\Requests\FormRequestUserRegister;
use App\Models\{Bank};
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    /**
     * 
     */
    public function getUserData(FormRequestUserRegister $request) {                                                        
        //Validaciones               
        $validator = Validator::make($request->all());        
        
        if ($validator->fails()) {
            return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
        }
        
        // Registrar variables de sesión
        $sessionVar = $this->sessionUser($request);
        
        return redirect('/user/get-address');
    }

    /**
     * 
     */
    public function showAddressForm() {
        return view('users.address');
    }

    public function getUserAddress(Request $request, FormRequestUserAddress $rulesAddress) { 
        //Validaciones                            
        $validator = Validator::make(
                                        $request->all(), 
                                        $rulesAddress                                        
                                    );        

        if ($validator->fails()) {
            // dd($validator->errors());
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
    
    
}
