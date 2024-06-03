<x-layouts.app 
    :title="$servicio->diagnostico"  
    :meta-description="$servicio->solucion">

    <h1>Datos del servicio</h1>

    <h3>Fecha de ingreso: </br>{{$servicio -> fecha_ingreso}}</h3>
    <h3>Estado: </br>{{$servicio -> estado}}</h3>
    <h3>Diagnostico: </br>{{$servicio -> diagnostico}}</h3>
    <h3>Solución: </br>{{$servicio -> solucion}}</h3>

    <a href="{{route('servicios.index')}}">Regresar</a><br/><br/><br/>

</x-layouts.app>