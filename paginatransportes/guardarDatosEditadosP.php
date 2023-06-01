<?php

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["idPaquete"]) || 
	!isset($_POST["Peso"]) || 
	!isset($_POST["Tamaño"]) || 
	!isset($_POST["Nombre_Destinatario"]) || 
	!isset($_POST["Destino"]) || 
	!isset($_POST["IdUnidad"]) ||
	!isset($_POST["FechaHora_Salida"]) || 
	!isset($_POST["FechaHora_Llegada"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$idPaquete = $_POST["idPaquete"];
$Peso = $_POST["Peso"];
$Tamaño = $_POST["Tamaño"];
$Nombre_Destinatario = $_POST["Nombre_Destinatario"];
$Destino = $_POST["Destino"];
$IdUnidad = $_POST["IdUnidad"]; 
$FechaHora_Salida = $_POST["FechaHora_Salida"];
$FechaHora_Llegada = $_POST["FechaHora_Llegada"];

$sentencia = $base_de_datos->prepare("UPDATE envio_paquete SET idPaquete = ?, Peso = ?, Tamaño = ?, Nombre_Destinatario = ?, Destino = ?,IdUnidad = ?,FechaHora_Salida = ?,FechaHora_Llegada = ? WHERE idPaquete = ?;");
$resultado = $sentencia->execute([$idPaquete, $Peso, $Tamaño, $Nombre_Destinatario, $Destino, $IdUnidad,$FechaHora_Salida,$FechaHora_Llegada,$idPaquete]);

if($resultado === TRUE){
	header("Location: ./infoPaquetes.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";
?>