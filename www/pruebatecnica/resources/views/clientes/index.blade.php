{{-- Vista cliente--}}

<x-layouts.app title="Clientes" meta-description="Cliente meta description">

        <style>
                .cliente-container {
                    border: 1px solid #ccc;
                    padding: 10px;
                    margin-bottom: 10px;
                }
        </style>

        <h1 style="text-align: center; font-size: 24px; margin-bottom: 20px;">Clientes</h1>
        <div style="text-align: center; margin-bottom: 20px;">
                <a href="{{route ('clientes.registrocliente')}}" style="color: black">Crear nuevo cliente</a>
        </div>
        @foreach ($clientes as $cliente)
                <div class="cliente-container">
                        <h2>
                                <a href="{{route ('clientes.show', $cliente->id_cliente)}}"; style="color: black; ">{{ $cliente->nombre }}</a>
                        </h2> &nbsp;

                        <a href="{{route('clientes.edit', $cliente)}}" style="color: black; display" >Editar</a>
                        <form action="{{route('clientes.destroy', $cliente)}}" method="POST">
                               @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                        </form>
                </div>
        @endforeach

</x-layouts.app>
     