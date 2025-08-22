<div>
  @if(strtolower($usuario) == "marcelo")
    <h3>Padre te estoy llamando desde otro telefono 🤳🤳🤳🦊🦊🦊</h3>
  @else
    @if($usuario != "sin_identificar")
      <h3>Asi que me llamas desde otro lugar <b>{{$usuario}}</b> 🤨🤨🤨🤨</h3>
    @else
      <h3>Parecer spam que me llamas tanto 📞📞📞📞😡😡😡</h3>
    @endif
  @endif

  {{$usuario}} {{--Escapado seguro (el html se muestra como si fuese texto)--}}
  {!!$usuario!!} {{--No escapado, imprime tal cual (se procesa las metiquetas html contenidas)--}}
</div>