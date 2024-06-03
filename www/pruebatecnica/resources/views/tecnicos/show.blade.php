<x-layouts.app 
    :title="$tecnico->nombre"  
    :meta-description="$tecnico->telefono">

    <h1>Datos del técnico</h1>

    <h3>Nombre: </br>{{$tecnico -> nombre}}</h3>
    <h3>Teléfono: </br>{{$tecnico -> telefono}}</h3>
    <h3>Correo Eléctronico: </br>{{$tecnico -> email}}</h3>

    <a href="{{route('tecnicos.index')}}">Regresar</a><br/><br/><br/>

</x-layouts.app>