<?php 

include ('db1.php');
$USUARIO=$_POST ['Nombre'];
$PASSWORD=$_POST ['Contrasena'];

$consulta = "SELECT* FROM usuarios where Nombre = '$USUARIO' and Contrasena = '$PASSWORD' ";
$resultado = mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:index.html");
}else{
    include("login.html");
?>
<div style="text-align: center;">
<h1>USUARIO INCORRECTO</h1>
<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>