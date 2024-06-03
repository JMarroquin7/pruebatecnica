<x-layouts.app 
    title="Registrar nuevo equipo"  
    meta-description="Formulario para registrar nuevo equipo">

    <h1>Registrar nuevo equipo</h1>

    <form action ="{{route('equipos.store')}}" method="POST">
        @csrf
        @include('equipos.form-fields')

        <br><button type="submit">Enviar</button>
    </form>

    <br/><a href="{{route('equipos.index')}}">Regresar</a><br/><br/><br/>
    
</x-layouts.app>

