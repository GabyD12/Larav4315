<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function create(){
        return view('formulario2');
    }

    public function store(Request $request){

        $movie= new Movie();
        $movie->name=$request->name;
        $movie->autor=$request->autor;
        $movie->plataforma=$request->plataforma;
        $movie->año=$request->year;
        $movie->save();
        return $movie;
     }
}

