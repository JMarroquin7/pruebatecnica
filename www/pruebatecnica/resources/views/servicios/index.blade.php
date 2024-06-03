{{-- Vista Servicio--}}

<x-layouts.app title="Servicios" meta-description="Servicio meta description">

    <style>
            .servicio-container {
                border: 1px solid #ccc;
                padding: 10px;
                margin-bottom: 10px;
            }
    </style>

    <h1 style="text-align: center; font-size: 24px; margin-bottom: 20px;">Servicio</h1>
    <div style="text-align: center; margin-bottom: 20px;">
            <a href="{{route ('servicios.registroservicio')}}" style="color: black">Crear nuevo servicio</a>
    </div>
    @foreach ($servicios as $servicio)
            <div class="servicio-container">
                    <h2>
                            <a href="{{route ('servicios.show', $servicio->id_servicio)}}"; style="color: black; ">{{ $servicio->diagnostico }}</a>
                    </h2> &nbsp;

                    <a href="{{route('servicios.edit', $servicio)}}" style="color: black; display" >Editar</a>
                    <form action="{{route('servicios.destroy', $servicio)}}" method="POST">
                           @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                    </form>
            </div>
    @endforeach

</x-layouts.app>
 