<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;


class ClienteController extends Controller
{
    //

public function create(){
    return view('formulario');
}
 
public function store(Request $request){

   $cliente= new Cliente();
   $cliente->nombre=$request->name;
   $cliente->correo=$request->email;
   $cliente->celular=$request->movil;
   $cliente->direccion=$request->adress;
   $cliente->save();
   return $cliente;
}






}
