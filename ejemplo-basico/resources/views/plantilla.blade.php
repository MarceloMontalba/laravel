<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario Unificado</title>
</head>
<body>
  <header>
    @yield('header')
  </header>

  <main>
    <h2>Menú de la pagina</h2>
    @if($usuario == 'Marcelo')
      <p>Hola {{$usuario}}, que tal!</p>
    @else
      <p>Como estás usuario?.</p>
    @endif

    <h1>Lista de animales con <b>foreach</b></h1>
    <ul>
      @foreach($animales as $animal)
        <li>{{$animal}}.</li>
      @endforeach
    </ul>

    <br>
    <h1>Lista de animales con <b>for</b></h1>
    <ul>
      @for($i=0;$i<count($animales);$i++)
        <li>{{$animales[$i]}}</li>
      @endfor
    </ul>

    <br>
    <h1>Lista de animales con <b>while</b></h1>
    
    @php $i=0; @endphp
    <ul>
      @while($i<count($animales))
        <li>{{$animales[$i]}}</li>
        @php $i++; @endphp
      @endwhile
    </ul>

    <br>
    <h1>Mensaje que sale un <b>switch case</b></h1>
    @switch(strtolower($usuario))
      @case("marcelo")
        <p>Bienvenido padre!!! 😲😲🦊🦊🦊</p>
        @break
      @default
        <p>Bienvenido mortal 🥱🥱🥱🥱🥱🥱🥱</p>
    @endswitch

    <br>
    <h1>Prueba con <b>isset</b></h1>
    @isset($usuario)
      @if($usuario!="sin_identificar")
        @if(strtolower($usuario) == "marcelo")
          <p>Eres mi padre!!!! 😲😲😲🦊🦊🦊</p>
        @else
          <p>Se quien eres 😏😏😏😏😏😏</p>
        @endif
      @else
        <p>Eres muy sospechoso, no se quien eres 🤨🤨🤨🤨🤨🤨</p>
      @endif
    @else
      <p>Eres muy sospechoso, no se quien eres 🤨🤨🤨🤨🤨🤨</p>
    @endisset

    <br>
    <h1>Prueba con <b>empty</b></h1>
    @empty($usuario)
      <p>No confio en ti, pero entrarás por ahora 🤨🤨🤨🤨🤨🤨</p>
    @else
      @if($usuario != "sin_identificar")
        @if(strtolower($usuario) == "marcelo")
          <p>Bienvenido al rancho padre 🧑‍🌾🧑‍🌾🧑‍🌾🦊🦊🦊</p>
        @else
          <p>Te tengo identificado 😎😎😎😎😎</p>
        @endif
      @else
        <p>No confio en ti, pero entrarás por ahora 🤨🤨🤨🤨🤨🤨</p>
      @endif
    @endempty

    <br>
    <h1>Invocación de una plantilla blade completa con <b>include</b></h1>
    @include("bloque", compact("usuario"))
  </main>

  <footer>
    @yield('footer')
  </footer>
</body>
</html>