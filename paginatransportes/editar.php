<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "db2.php";
//Sentencia preparada (prepare)
//Primero una plantilla de la sentencia SQL se crea y se envía a la base de datos. 
//Algunos valores se dejan sin especificar, llamados parámetros y representados por un interrogante "?"
$sentencia = $base_de_datos->prepare("SELECT * FROM boletos WHERE IdBoleto = ?;");
$sentencia->execute([$id]);
$boleto = $sentencia->fetch(PDO::FETCH_OBJ);
if($boleto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php //encabezado ?>
	<div class="col-xs-12">
		<h1>Editar boleto con el ID <?php echo $boleto->IdBoleto; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="IdBoleto" value="<?php $boleto->IdBoleto; ?>">
	
			<label for="horasalida">Hora_Salida</label>
			<input value="<?php echo $boleto->Hora_Salida ?>" class="form-control" name="horasalida" required type="datetime-local" id="Horasalida" placeholder="Escribe la horasalida">

			<label for="destino">Destino</label>
			<input value="<?php echo $boleto->Destino?>" class="form-control" name="precioVenta" required type="text" id="destino" placeholder="destino">

			<label for="precioVenta">Unidad</label>
			<input value="<?php echo $boleto->Unidad ?>" class="form-control" name="precioVenta" required type="number" id="precioVenta" placeholder="Precio de venta">

			<label for="precioCompra">Asiento</label>
			<input value="<?php echo $boleto->Asiento ?>" class="form-control" name="precioCompra" required type="number" id="precioCompra" placeholder="Precio de compra">

			<label for="existencia">IdCliente</label>
			<input value="<?php echo $boleto->IdCliente ?>" class="form-control" name="existencia" required type="number" id="existencia" placeholder="Cantidad o existencia">
			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./vistareservaciones.php">Cancelar</a>
		</form>
	</div>
<?php ?>
