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
$IdUnidad = $_POST['IdUnidad'];
  $Matricula = $_POST['Matricula'];
  $Marca = $_POST['Marca'];
  $Modelo = $_POST['Modelo'];
  
  $Fecha_ingreso = $_POST['Fecha_ingreso'];
    
$sql = "INSERT INTO unidad (IdUnidad,Matricula,Marca,Modelo,Fecha_ingreso) VALUES 
('$IdUnidad','$Matricula','$Marca','$Modelo','$Fecha_ingreso')";

if ($conn->query($sql) === TRUE) {
    
    /*echo  " Boleto guardado exitosamente.";*/
    header("Location: infoUnidad.php");
    exit;
    
} else {
    echo "Error al guardar el boleto: " . $conn->error;
}
/*}*/

// Cierra la conexión con la base de datos
$conn->close();
?>