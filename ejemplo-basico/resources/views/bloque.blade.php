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

  {{$usuario}} {{--Escapado seguro (se procesa las metiquetas html contenidas)--}}
  {!!$usuario!!} {{--No escapado, imprime tal cual (el html se muestra como si fuese texto) --}}
</div>