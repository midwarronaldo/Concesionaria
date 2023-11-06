<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
    </head>
    <body>
    <form action="/automovil/editar/{{ $automovil->id}}" method ="POST">
        @csrf
        {{ method_field('PUT') }}
        <label>Marca:</label>
        <input type="text" name="marca" placeholder="marca" value="{{ $automovil->marca}}">
        <label>Modelo:</label>
        <input type="text" name="modelo" placeholder="Su Apellido" value="{{ $automovil->modelo}}">
        <label>Año:</label>
        <input type="text" name="year" placeholder="Su year" value="{{ $automovil->year}}">
        <label>Color:</label>
        <input type="text" name="color" placeholder="Su color" value="{{ $automovil->color}}">
        <label>Precio:</label>
        <input type="text" name="precio" placeholder="precio del Auto" value="{{ $automovil->precio}}">
        <label>Kilometraje:</label>
        <input type="text" name="kilometraje" placeholder="Kilometraje del Auto" value="{{ $automovil->kilometraje}}">
        <label>Transmision:</label>
        <input type="text" name="transmision" placeholder="transmision del Auto" value="{{ $automovil->transmision}}">
        <input type="submit" value="Guardar">
    </form>

    <!--@foreach ($errors->all() as $error)
    <p style="color:red">{{ $error }}</p>
    @endforeach-->

    </body>
</html>

<style>
body {
margin: auto;
padding: 50px;
}
input[type=text], select {
width: 100%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
}
input[type=submit] {
width: 100%;
background-color: #4CAF50;
color: white;
padding: 14px 20px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;
}
input[type=submit]:hover {
background-color: #45a049;
}
div {
background-color: #f2f2f2;
padding: 20px;
}
</style>