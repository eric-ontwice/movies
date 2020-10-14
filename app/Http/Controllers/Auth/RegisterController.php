<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Models\{UserPayment};
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'bank'              => ['required', 'exists:banks,id'],
            'card_number'       => ['required', 'string', 'min:16'],
            'expiration_month'  => ['required', 'in:1,2,3,4,5,6,7,8,9,10,11,12'],
            'expiration_year'   => ['required', 'in:20,21,22,23,24,25'],
            'cvv'               => ['required', 'digits:3']
            ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // dd(\Session::all());
        $user = User::create([
            'name'      => session('user_name'),
            'lastname'  => session('user_lastname'),
            'email'     => session('user_email'),
            'password'  => Hash::make(session('useR_password')),
            'birthdate' => session('user_birthdate'),
        ]);

        // Guardar direccion del usuario

        // Guardar metodo de pago
        $user_payment = new UserPayment;
        $user_payment->card_number = $data['card_number'];
        $user_payment->expiration_month = $data['expiration_month'];
        $user_payment->expiration_year = $data['expiration_year'];
        $user_payment->cvv = $data['cvv'];
        $user_payment->user_id = $user->id;
        $user_payment->bank_id = $data['bank'];
        $user_payment->save();
        
        return $user;
    }
}
