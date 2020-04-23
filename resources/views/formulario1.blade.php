<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <h2>Rellena los siguientes campos:</h2>
    <form method="post" action="{{ route ('formulario1') }}">
        @csrf
        <input type="text" id ="nombre" name="usuario" placeholder="Nombre..."required><br><br>
        <input type="text" id="apellido" name="apellido" placeholder="Apellido..." ><br><br>
        <input type="number" id="cedula" name="cedula" placeholder="Cedula..."required><br><br>
        <input type="email" id="email" name="correo" placeholder="Correo..." ><br><br>
        <input type="password" id="clave" name="contraseña" placeholder="Constraseña..." required><br><br>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>