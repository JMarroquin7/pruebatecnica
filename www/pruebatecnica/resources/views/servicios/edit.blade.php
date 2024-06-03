<x-layouts.app 
    :title="$servicio->diagnostico"  
    :meta-description="$servicio->solucion">

    <h1>Fomulario de actualización de servicio</h1>

    <form action ="{{route('servicios.update', $servicio)}}" method="POST">
        @csrf 
        @method('patch')
        @include('servicios.form-fields')

        <br><button type="submit">Enviar</button>
        <br>
    </form>
    <br>
    <a href="{{route('servicios.index')}}">Regresar</a>
</x-layouts.app>