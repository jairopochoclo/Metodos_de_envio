<?php
    echo "Estamos procesando sus datos.....<br><br>";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = isset($_POST["nombre"]) ? trim($_POST["nombre"]) : "";
        $direccion = isset($_POST["direccion"]) ? trim($_POST["direccion"]) : "";
        $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]) : "";

        if (empty($nombre) || empty($direccion) || empty($telefono)) {
            echo "<p>Coloque los datos por favor</p>";
        } else {
            echo "Nombre: " . $nombre . "<br>";
            echo "Direccion: " . $direccion . "<br>";
            echo "Telefono: " . $telefono . "<br>";
        }
    }
?>