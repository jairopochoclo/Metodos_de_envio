<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario POST</title>
</head>
<body>
    <h2>Ejemplo envio de informacion (POST)</h2>
    <form action="procesar_datos.php" method="POST">
        <label for="">Nombre Completo: </label><br> 
        <input type="text" name="nombre"><br>

        <label for="">Dirección: </label><br> 
        <input type="text" name="direccion"><br>

        <label for="">Teléfono: </label><br> 
        <input type="text" name="telefono"><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
