<x-layouts.app 
    :title="$cliente->nombre"  
    :meta-description="$cliente->telefono">

    <h1>Datos del cliente</h1>

    <h3>Nombre: </br>{{$cliente -> nombre}}</h3>
    <h3>Teléfono: </br>{{$cliente -> telefono}}</h3>
    <h3>Correo Eléctronico: </br>{{$cliente -> email}}</h3>

    <a href="{{route('clientes.index')}}">Regresar</a><br/><br/><br/>

</x-layouts.app>