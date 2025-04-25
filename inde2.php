<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario GET</title>
</head>
<body>
    <h2>Ejemplo envio de informacion (GET)</h2>
    <form action="" method="GET">
        <label for="">Universidad: </label><br> 
        <input type="text" name="universidad"><br>

        <label for="">Carrera: </label><br> 
        <input type="text" name="carrera"><br>

        <label for="">Semestre: </label><br> 
        <input type="text" name="semestre"><br>

        <input type="submit" value="Enviar"><br>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $universidad = isset($_GET["universidad"]) ? trim($_GET["universidad"]) : "";
            $carrera = isset($_GET["carrera"]) ? trim($_GET["carrera"]) : "";
            $semestre = isset($_GET["semestre"]) ? trim($_GET["semestre"]) : "";

            if (empty($universidad) || empty($carrera) || empty($semestre)) {
                echo "<p>Coloque los datos por favor</p>";
            } else {
                echo "<p>Universidad: $universidad</p>";
                echo "<p>Carrera: $carrera</p>";
                echo "<p>Semestre: $semestre</p>";
            }
        }
    ?>
</body>
</html>
