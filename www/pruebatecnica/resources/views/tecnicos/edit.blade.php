<x-layouts.app 
    :title="$tecnico->nombre"  
    :meta-description="$tecnico->telefono">

    <h1>Fomulario de actualización de tecnico</h1>

    <form action ="{{route('tecnicos.update', $tecnico)}}" method="POST">
        @csrf 
        @method('patch')
        @include('tecnicos.form-fields')

        <br><button type="submit">Enviar</button>
        <br>
    </form>
    <br>
    <a href="{{route('tecnicos.index')}}">Regresar</a>
</x-layouts.app>