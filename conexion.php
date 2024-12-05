<?php
$nombreservidor = "localhost";
$nombreusuario = "root";
$contraseña = "";
$nombre_base_datos = "cambio30";

// Crear conexión
$conn = new mysqli($nombreservidor, $nombreusuario, $contraseña, $nombre_base_datos);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];

// Consulta para insertar los datos
$sql_insertar = "INSERT INTO productos (nombre, precio, descripcion) VALUES ('$nombre', $precio, '$descripcion')";

if ($conn->query($sql_insertar) === TRUE) {
    echo "Producto agregado exitosamente.";
} else {
    echo "Error al agregar el producto: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
