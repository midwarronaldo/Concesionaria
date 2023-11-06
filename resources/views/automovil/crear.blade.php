<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
    </head>
    <body>
    <form action="/automovil/crear" method ="POST">
        @csrf
        <label>Marca:</label>
        <input type="text" name="marca" placeholder="Marca del Auto">
        <label>Modelo:</label>
        <input type="text" name="modelo" placeholder="Modelo del Auto">
        <label>Año:</label>
        <input type="text" name="year" placeholder="Año del Auto">
        <label>Color:</label>
        <input type="text" name="color" placeholder="Color del Auto">
        <label>Precio:</label>
        <input type="text" name="precio" placeholder="precio del Auto">
        <label>Kilometraje:</label>
        <input type="text" name="kilometraje" placeholder="Kilometraje del Auto">
        <label>Transmision:</label>
        <input type="text" name="transmision" placeholder="transmision del Auto">
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