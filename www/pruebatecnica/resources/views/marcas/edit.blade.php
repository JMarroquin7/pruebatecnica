<x-layouts.app 
    :title="$marca->nombre"  
    :meta-description="$marca->pais">

    <h1>Fomulario de actualización de la marca</h1>

    <form action ="{{route('marcas.update', $marca)}}" method="POST">
        @csrf 
        @method('patch')
        @include('marcas.form-fields')

        <br><button type="submit">Enviar</button>
        <br>
    </form>
    <br>
    <a href="{{route('marcas.index')}}">Regresar</a>
</x-layouts.app>