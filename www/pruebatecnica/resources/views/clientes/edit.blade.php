<x-layouts.app 
    :title="$cliente->nombre"  
    :meta-description="$cliente->telefono">

    <h1>Fomulario de actualización de cliente</h1>

    <form action ="{{route('clientes.update', $cliente)}}" method="POST">
        @csrf 
        @method('patch')
        @include('clientes.form-fields')

        <br><button type="submit">Enviar</button>
        <br>
    </form>
    <br>
    <a href="{{route('clientes.index')}}">Regresar</a>
</x-layouts.app>