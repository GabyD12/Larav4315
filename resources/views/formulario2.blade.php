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

    <form action="{{route('movie.store')}}" method="POST" enctype="multipart/form-data">
    
    @csrf
    
    <label>
        Nombre
        <br>
        <input type="text" name="name">
    </label>
    <br>
    
    <label>
       Autor
       <br>
       <input type="text" name="autor">
    </label>
    <br>
    
    <label>
        Plataforma
        <br>
        <input type="text" name="plataforma">
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