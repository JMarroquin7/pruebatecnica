{{-- Vista Marca--}}

<x-layouts.app title="Marcas" meta-description="Marca meta description">

    <style>
            .marca-container {
                border: 1px solid #ccc;
                padding: 10px;
                margin-bottom: 10px;
            }
    </style>

    <h1 style="text-align: center; font-size: 24px; margin-bottom: 20px;">Marcas</h1>
    <div style="text-align: center; margin-bottom: 20px;">
            <a href="{{route ('marcas.registromarca')}}" style="color: black">Crear nueva marca</a>
    </div>
    @foreach ($marcas as $marca)
            <div class="marca-container">
                    <h2>
                            <a href="{{route ('marcas.show', $marca->id_marca)}}"; style="color: black; ">{{ $marca->nombre }}</a>
                    </h2> &nbsp;

                    <a href="{{route('marcas.edit', $marca)}}" style="color: black; display" >Editar</a>
                    <form action="{{route('marcas.destroy', $marca)}}" method="POST">
                           @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                    </form>
            </div>
    @endforeach

</x-layouts.app>
 