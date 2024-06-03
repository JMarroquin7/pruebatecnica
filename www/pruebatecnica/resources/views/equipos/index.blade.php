{{-- Vista equipo--}}

<x-layouts.app title="Equipos" meta-description="equipo meta description">

    <style>
            .equipo-container {
                border: 1px solid #ccc;
                padding: 10px;
                margin-bottom: 10px;
            }
    </style>

    <h1 style="text-align: center; font-size: 24px; margin-bottom: 20px;">Equipos</h1>
    <div style="text-align: center; margin-bottom: 20px;">
            <a href="{{route ('equipos.registroequipo')}}" style="color: black">Crear nuevo equipo</a>
    </div>
    @foreach ($equipos as $equipo)
            <div class="equipo-container">
                    <h2>
                            <a href="{{route ('equipos.show', $equipo->id_equipo)}}"; style="color: black; ">{{ $equipo->tipo }}</a>
                    </h2> &nbsp;

                    <a href="{{route('equipos.edit', $equipo)}}" style="color: black; display" >Editar</a>
                    <form action="{{route('equipos.destroy', $equipo)}}" method="POST">
                           @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                    </form>
            </div>
    @endforeach

</x-layouts.app>
 