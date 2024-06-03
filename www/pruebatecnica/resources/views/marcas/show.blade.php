<x-layouts.app 
    :title="$marca->nombre"  
    :meta-description="$marca->pais">

    <h1>Datos del marca</h1>

    <h3>Nombre: </br>{{$marca -> nombre}}</h3>
    <h3>Pais: </br>{{$marca -> pais}}</h3>

    <a href="{{route('marcas.index')}}">Regresar</a><br/><br/><br/>

</x-layouts.app>