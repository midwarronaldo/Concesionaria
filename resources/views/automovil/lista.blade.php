<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
    </head>
    <body>
    <a href="/automovil/crear">Nuevo Auto</a>
        <table>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Año</th>
                <th>Color</th>
                <th>Precio</th>
                <th>Kilometraje</th>
                <th>Transmision</th>
                <th>Acción</th>
            </tr>
        @foreach ($automovil as $automovil)
        <tr>
            <td>{{ $automovil->marca }}</td>
            <td>{{ $automovil->modelo }}</td>
            <td>{{ $automovil->year }}</td>
            <td>{{ $automovil->color }}</td>
            <td>{{ $automovil->precio }}</td>
            <td>{{ $automovil->kilometraje }}</td>
            <td>{{ $automovil->transmision }}</td>
            <td>
                <a href="/automovil/ver/{{$automovil->id}}">Ver</a>
                <a href="/automovil/editar/{{$automovil->id}}">Editar</a>
                <a href="/automovil/eliminar/{{$automovil->id}}" onclick="return eliminarAutomovil('Eliminar Automovil')"> Eliminar</a>
            </td>
        </tr>
        @endforeach
        </table>
    </body>
</html>
<script>
    function eliminarAutomovil(value) {
        action = confirm(value) ? true : event.preventDefault()
    }
</script>

<style>
body {
margin: auto;
padding: 50px;
}
table, td, th {
border: 1px solid black;
}
table {
border-collapse: collapse;
width: 100%;
}
th {
height: 70px;
}
td {
height: 30px;
}
.button {
background-color:#4CAF50;
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
}
</style>