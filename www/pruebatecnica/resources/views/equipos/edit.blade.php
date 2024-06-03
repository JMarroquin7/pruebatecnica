<x-layouts.app 
    :title="$equipo->tipo"  
    :meta-description="$equipo->modelo">

    <h1>Fomulario de actualización de equipo</h1>

    <form action ="{{route('equipos.update', $equipo)}}" method="POST">
        @csrf 
        @method('patch')
        @include('equipos.form-fields')

        <br><button type="submit">Enviar</button>
        <br>
    </form>
    <br>
    <a href="{{route('equipos.index')}}">Regresar</a>
</x-layouts.app>