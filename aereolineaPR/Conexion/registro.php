<?php
 require "db_conexion.php";


 $nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$documento_identidad = $_POST['documento_identidad'];

// Query para insertar datos en la tabla "Pasajeros"
$query = "INSERT INTO Pasajero (nombre_pasajero, apellido_pasajero, email_pasajero, doc_id_pasajero) VALUES ('$nombre', '$apellido', '$email', '$documento_identidad')";

// Ejecutar la consulta
if ($conn->query($query) === TRUE) {
    echo "Datos insertados correctamente en la tabla Pasajeros.";
} else {
    echo "Error al insertar datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>






