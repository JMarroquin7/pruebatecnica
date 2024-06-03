<x-layouts.app 
    title="Registrar nuevo marca"  
    meta-description="Formulario para registrar nuevo marca">

    <h1>Registrar una nueva marca</h1>

    <form action ="{{route('marcas.store')}}" method="POST">
        @csrf
        @include('marcas.form-fields')

        <br><button type="submit">Enviar</button>
    </form>

    <br/><a href="{{route('marcas.index')}}">Regresar</a><br/><br/><br/>
    
</x-layouts.app>

