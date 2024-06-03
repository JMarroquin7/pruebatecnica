<x-layouts.app 
    :title="$equipo->tipo"  
    :meta-description="$equipo->modelo">

    <h1>Datos del equipo</h1>

    <h3>Tipo: </br>{{$equipo -> tipo}}</h3>
    <h3>Modelo: </br>{{$equipo -> modelo}}</h3>


    <a href="{{route('equipos.index')}}">Regresar</a><br/><br/><br/>

</x-layouts.app>