<?php

namespace App\Http\Controllers;

use App\Models\{Bank};
use Validator;

use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * 
     */
    public function getUserData(Request $request) {
        $validator = Validator::make($request->all(), [
            'name'      => ['required', 'string', 'max:255'],
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'  => ['required', 'string', 'min:8', 'confirmed'],
            'birthdate' => ['required', 'date'] 
            ]);

        if ($validator->fails()) {
            return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
        }

        // Registrar variables de sesión
        session(['user_name'        => $request->name]);
        session(['user_lastname'    => $request->lastname]);
        session(['user_email'       => $request->email]);
        session(['user_password'    => $request->password]);
        session(['user_birthdate'   => $request->birthdate]);

        // dd(session('idCarroCompra'));

        // Obtener bancos
        $banks = Bank::all();

        return view('users.bank_info')->with(compact([
                                                        'banks'
                                                    ]));
    }
}
