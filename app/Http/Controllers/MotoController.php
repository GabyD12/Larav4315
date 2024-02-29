<?php

namespace App\Http\Controllers;

use App\Models\Moto;
use Illuminate\Http\Request;


class MotoController extends Controller
{
    //
    public function create(){
        return view('formulario1');
    }

    public function store(Request $request){

        $moto= new Moto();
        $moto->marca=$request->name;
        $moto->color=$request->color;
        $moto->cilindraje=$request->cc;
        $moto->año=$request->year;
        $moto->save();
        return $moto;
     }
    
}
