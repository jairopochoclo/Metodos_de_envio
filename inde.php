<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario POST</title>
</head>
<body>
    <h2>Ejemplo envio de informacion (POST)</h2>
    <form action="" method="POST">
        <label for="">Nombre Completo: </label><br> 
        <input type="text" name="nombre"><br>

        <label for="">Dirección: </label><br> 
        <input type="text" name="direccion"><br>

        <label for="">Teléfono: </label><br> 
        <input type="text" name="telefono"><br>

        <input type="submit" value="Enviar">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = trim($_POST["nombre"]);
            $dir = trim($_POST["direccion"]);
            $telefono = trim($_POST["telefono"]);

            if (empty($nombre) || empty($dir) || empty($telefono)) {
                echo "<p>Coloque los datos por favor</p>";
            } else {
                echo "<p>Nombre: $nombre</p>";
                echo "<p>Direccion: $dir</p>";
                echo "<p>Telefono: $telefono</p>";
            }
        }
    ?>
</body>
</html>
