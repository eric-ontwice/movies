<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Carbon;
use App\Models\{Gender,Movie};

class VerifyClassificationBirthdate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {           
        $movie = $request->route()->parameters();        

        $birthdate = "";
        $birthdate = \Auth::user()->birthdate;
        //dd($birthdate);// "1998-01-03"

        $birthdate = Carbon::parse($birthdate)->diffForHumans();
        $years_old = explode(" ",$birthdate);        
        $years_old = $years_old[0];
        //dd($years_old);// "22"
        
        //dd($movie);// array:1 [▼"pelicula_id" => "10"]
        $movie_id   = implode($movie);        
        //dd($movie_id);//  "10"        

        $movie          = Movie::where('id','=',$movie_id)->first();        
        $classification = $movie->classification;

        /**
         * Condiciones
         */
        if ($classification=='AA' || $classification=='A') { return $next($request); }
        else if ($years_old >= 12 &&  $classification=='B'){ return $next($request); }
        else if ($years_old >= 16 &&  $classification=='B15'){ return $next($request); }
        else if ($years_old >= 18 &&  $classification=='C'){ return $next($request); }        
        else if ($years_old >= 18 &&  $classification=='D'){ return $next($request); }        
        else{
            return redirect('/movies');
        }        
    }
}

        /*    
         “AA”    Películas con  atractivo infantil, para niños menores de siete años de edad.
         “A”    Películas para todo público.         
>=12     “B”    Películas para adolescentes de 12 años en adelante.         
>=16     “B15”  Película no recomendable para menores de 15 años de edad.         
>=18     “C”    Películas para adultos de 18 años en adelante.         
>=18     “D”    Películas para adultos, con sexo explícito, lenguaje procaz o alto grado de violencia.
        */