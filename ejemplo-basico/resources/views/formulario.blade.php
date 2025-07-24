<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de prueba</title>
</head>
<body>
  <h1>Formulario con POST</h1>

  <form action="{{ url('/prueba_post') }}" method="post"> 
  <!-- Otra forma de hacerlo pero invocando a un nombre de ruta: -->
  <!-- <form action="{{ route('prueba_post') }}" method="post"> -->  
    @csrf

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre"/>

    <label for="edad">Edad:</label>
    <input type="number" name="edad" id="edad">

    <button type="submit">Enviar</button>
  </form>

  <br><br>

  <!-- Carga de archivos -->
  <img src="{{ asset('images/perrito.jpg') }}" width=400>
  <img src="https://plus.unsplash.com/premium_photo-1661892088256-0a17130b3d0d?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8cGVycml0b3xlbnwwfHwwfHx8MA%3D%3D" 
       width=400
  >
</body>
</html>