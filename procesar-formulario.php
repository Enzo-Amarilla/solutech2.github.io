<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$dbname = "formulariodb.db";

// Crear conexión
$conn = new mysqli($dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}

// Recoger datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO contactos (nombre, email, mensaje)
VALUES ('$nombre', '$email', '$mensaje')";

if ($conn->query($sql) === TRUE ) {
    echo "Los datos se han guardado correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

