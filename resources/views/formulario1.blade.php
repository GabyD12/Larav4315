<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>

<form action="{{route('moto.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Marca
    <br>
    <input type="text" name="name">
</label>
<br>

<label>
   Color
   <br>
   <input type="text" name="color">
</label>
<br>

<label>
    Cilindraje
    <br>
    <input type="number" name="cc">
    </label>
    <br>

    
<label>
    Año
    <br>
    <input type="text" name="year">
</label>
<button type="submit">Enviar Formulario:</button>
</body>
</html>