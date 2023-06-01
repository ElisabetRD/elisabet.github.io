<?php
if(!isset($_GET["idPaquete"])) exit();
$idPaquete = $_GET["idPaquete"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("DELETE FROM envio_paquete WHERE idPaquete = ?;");
$resultado = $sentencia->execute([$idPaquete]);
if($resultado === TRUE){
	header("Location: ./infoPaquetes.php");
	exit;
}
else echo "Algo salió mal";
?>