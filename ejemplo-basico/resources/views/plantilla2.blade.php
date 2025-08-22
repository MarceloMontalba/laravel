<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Retomando Laravel</title>
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}" type="text/css" />
</head>
<body>
  <header class="menu">
    <li>
      <ul>Inicio</ul>
      <ul>Selección 1</ul>
      <ul>Selección 2</ul>
      <ul>Selección 3</ul>
    </li>
  </header>

  <main>
    @yield("menu")
  </main>

  <footer>
    <li>
      <ul>Contactanos</ul>
      <ul>Trabaja con nosotros</ul>
      <ul>Derechos reservados</ul>
    </li>
  </footer>
</body>
</html>