<x-layouts.app 
    title="Registrar nuevo tecnico"  
    meta-description="Formulario para registrar nuevo tecnico">

    <h1>Registrar nuevo técnico</h1>

    <form action ="{{route('tecnicos.store')}}" method="POST">
        @csrf
        @include('tecnicos.form-fields')

        <br><button type="submit">Enviar</button>
    </form>

    <br/><a href="{{route('tecnicos.index')}}">Regresar</a><br/><br/><br/>
    
</x-layouts.app>

