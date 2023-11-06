<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
    </head>
    <body>
        <div>
        <h2>Auto: {{ $automovil->marca}}  {{ $automovil->modelo}}</h2>
        <p>Año: {{ $automovil->year}}</p>
        <p>Color: {{ $automovil->color}}</p>
        <p>Precio: {{ $automovil->color}}</p>
        <p>Kilometraje: {{ $automovil->kilometraje}}</p>
        <p>Transmision: {{ $automovil->transmision}}</p>
        </div>
    </body>
</html>
<!-- Styles -->
<style>
    body {
        margin: auto;
        padding: 50px;
    }
</style>
