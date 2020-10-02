<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Ver detalla de película
     */
    public function show($pelicula_id) {
        // Obtener detalle de la pelicula con el id $pelicula_id

        return view('movies.show');
    }
}
