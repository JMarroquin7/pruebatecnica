<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de la Página</title>
    <style>
        .menu {
            list-style-type: none;
            padding: 0;
            margin: 0;
            background-color: #333;
            overflow: hidden;
            text-align: center; 
        }

        .menu li {
            display: inline-block; 
        }

        .menu li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .menu li a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

<nav>
    <ul class="menu">
        <li><a href="{{route('home')}}">Inicio</a></li>
        <li><a href="{{route('clientes.index')}}">Clientes</a></li>
        <li><a href="{{route('tecnicos.index')}}">Técnicos</a></li>
        <li><a href="{{route('equipos.index')}}">Equipos</a></li>
        <li><a href="{{route('marcas.index')}}">Marcas</a></li>
        <li><a href="{{route('servicios.index')}}">Servicios</a></li>
    </ul>
</nav>

