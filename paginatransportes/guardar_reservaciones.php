<?php
#Salir si alguno de los datos no está presente
//if(!isset($_POST["codigo"]) || !isset($_POST["descripcion"]) || !isset($_POST["precioVenta"]) || !isset($_POST["precioCompra"]) || !isset($_POST["existencia"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "db2.php"; //inculir el archivo de conexión

$nombre = $_POST["nombre"]; //escrinir minusculas , mayúsculas solo las palabaras reservadas ej. insert into
$correo = $_POST["correo"];
$destino = $_POST["destino"];
$fecha = $_POST["fecha"];
$asiento = $_POST["asiento"];
$telefono = $_POST["telefono"];
$sexo = $_POST["sexo"];
$unidad = 1;
$idcliente=12;
$idtrabajador=1;
//echo $nombre, $correo, $destino, $fecha, $asiento, $telefono, $sexo;
//investigar consultas preparadas
$sentencia = $base_de_datos->prepare("INSERT INTO boletos(Hora_Salida,Destino, Unidad,Asiento,IdCliente,IdTrabajador) VALUES (?, ?, ?, ?, ?,?);");
$resultado = $sentencia->execute([$fecha, $destino, $unidad, $asiento, $idcliente, $idtrabajador]);

if($resultado === TRUE){
	header("Location: ./vistareservaciones.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";



?>
