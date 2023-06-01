<?php
if(!isset($_GET["IdUnidad"])) exit();
$IdUnidad = $_GET["IdUnidad"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("DELETE FROM unidad WHERE IdUnidad = ?;");
$resultado = $sentencia->execute([$IdUnidad]);
if($resultado === TRUE){
	header("Location: ./infoUnidad.php");
	exit;
}
else echo "Algo salió mal";
?>