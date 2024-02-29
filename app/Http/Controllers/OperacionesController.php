<?php

namespace App\Http\Controllers;


php

class OperacionesController extends Controller
{
    




public function create(){

  return view('formulario');

}

public function store(Request $request){
  
  $num1 = intval($request->name); // Asegúrate de que $num1 sea un entero
  $contador = 0;
  
  for ($k = 1; $k <= $num1; $k++) {
      if ($num1 % $k == 0) {
          $contador++;
      }
  }
  
  if ($contador == 2) {
      return "es primo";
  } else {
      return "no es primo";
  }
}
}
