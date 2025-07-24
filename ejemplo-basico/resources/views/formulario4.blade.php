<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de prueba</title>
</head>
<body>
  <h1>Formulario con DELETE</h1>

  <form action="{{ route('eliminar.dato') }}" method="post"> 
  <!-- Otra forma de hacerlo pero invocando a un nombre de ruta: -->
  <!-- <form action="{{ route('prueba_post') }}" method="post"> -->  
    @csrf
    @method("DELETE")

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre"/>

    <label for="edad">Edad:</label>
    <input type="number" name="edad" id="edad">

    <button type="submit">Enviar</button>
  </form>
</body>
</html>