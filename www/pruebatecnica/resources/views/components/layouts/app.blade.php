<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta httpp-equiv="X-UA-Compatible" content="ie=edge">

     <title>Prueba técnica - CRUD de {{$title ?? ''}}</title>
      <meta name="description" content={{ $metaDescription ?? 'Default meta description'}}/>

    </head>
    <body>

    <x-layouts.navigation />



        {{ $slot }}

    </body>
    
    </br>
    
    @if(session('status')) {{-- Verificacion de existencia del mensaje de creacion --}}
    <div> {{session('status')}} </div>

@endif
    </html>
     