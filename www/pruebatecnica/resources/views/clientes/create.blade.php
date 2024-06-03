<x-layouts.app 
    title="Registrar nuevo cliente"  
    meta-description="Formulario para registrar nuevo cliente">

    <h1>Registrar nuevo cliente</h1>

    <form action ="{{route('clientes.store')}}" method="POST">
        @csrf
        @include('clientes.form-fields')

        <br><button type="submit">Enviar</button>
    </form>

    <br/><a href="{{route('clientes.index')}}">Regresar</a><br/><br/><br/>
    
</x-layouts.app>

