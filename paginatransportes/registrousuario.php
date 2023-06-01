<?php
// Establece la conexión con la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abd_transportes1";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}
// Obtiene los valores del formulario

  $Nombre = $_POST['Nombre'];
  $Apellido = $_POST['Apellido'];
  $Telefono = $_POST['Telefono'];
  $Edad = $_POST['Edad'];
  $Sexo = $_POST['Sexo'];
  $Puesto= $_POST['Puesto'];
  $Contrasena = $_POST['Contrasena'];
  $Fecha_ingreso = $_POST['Fecha_ingreso'];

$sql = "INSERT INTO usuarios (Nombre, Apellido, Telefono, Edad, Sexo,Puesto, Contrasena, Fecha_ingreso) VALUES 
('$Nombre', '$Apellido', '$Telefono', '$Edad', '$Sexo','$Puesto', '$Contrasena', '$Fecha_ingreso')";

if ($conn->query($sql) === TRUE) {
    
    /*echo  " Boleto guardado exitosamente.";*/
    header("Location: login.html");
    exit;
    
} else {
    echo "Error al guardar el boleto: " . $conn->error;
}
/*}*/

// Cierra la conexión con la base de datos
$conn->close();
?>