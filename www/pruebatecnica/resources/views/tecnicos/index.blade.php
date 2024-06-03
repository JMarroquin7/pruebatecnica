{{-- Vista tecnico--}}

<x-layouts.app title="Técnicos" meta-description="tecnico meta description">

    <style>
            .tecnico-container {
                border: 1px solid #ccc;
                padding: 10px;
                margin-bottom: 10px;
            }
    </style>

    <h1 style="text-align: center; font-size: 24px; margin-bottom: 20px;">Técnicos</h1>
    <div style="text-align: center; margin-bottom: 20px;">
            <a href="{{route ('tecnicos.registrotecnico')}}" style="color: black">Registrar un técnico</a>
    </div>
    @foreach ($tecnicos as $tecnico)
            <div class="tecnico-container">
                    <h2>
                            <a href="{{route ('tecnicos.show', $tecnico->id_tecnico)}}"; style="color: black; ">{{ $tecnico->nombre }}</a>
                    </h2> &nbsp;

                    <a href="{{route('tecnicos.edit', $tecnico)}}" style="color: black; display" >Editar</a>
                    <form action="{{route('tecnicos.destroy', $tecnico)}}" method="POST">
                           @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                    </form>
            </div>
    @endforeach

</x-layouts.app>
 