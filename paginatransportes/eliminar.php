<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "db2.php";
$sentencia = $base_de_datos->prepare("DELETE FROM boletos WHERE IdBoleto = ?;");
$resultado = $sentencia->execute([$id]);
if($resultado === TRUE){
	header("Location: ./vistareservaciones.php");
	exit;
}
else echo "Algo salió mal";
?>