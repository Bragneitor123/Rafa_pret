<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $contraseña = password_hash($_POST["contraseña"], PASSWORD_BCRYPT);

    $conexion = new mysqli("localhost", "usuario_db", "password_db", "nombre_db");

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    $sql = "INSERT INTO usuarios (nombre, correo, contraseña) VALUES ('$nombre', '$correo', '$contraseña')";

    if ($conexion->query($sql) === TRUE) {
        echo "Registro exitoso. <a href='login.html'>Inicia sesión aquí</a>";
    } else {
        echo "Error: " . $conexion->error;
    }
    %whiled 
    $conexion->close();
} //AHHSj

?>