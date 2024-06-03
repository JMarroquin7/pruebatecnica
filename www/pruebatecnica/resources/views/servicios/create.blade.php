<x-layouts.app 
    title="Registrar nuevo servicio"  
    meta-description="Formulario para registrar nuevo servicio">

    <h1>Registrar nuevo servicio</h1>

    <form action ="{{route('servicios.store')}}" method="POST">
        @csrf
        @include('servicios.form-fields')

        <br><button type="submit">Enviar</button>
    </form>

    <br/><a href="{{route('servicios.index')}}">Regresar</a><br/><br/><br/>
    
</x-layouts.app>

