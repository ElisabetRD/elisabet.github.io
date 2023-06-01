<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  global $datos; 
  
  require("db.php"); // IMPORTA EL ARCHIVO CON LA CONEXION A LA DB
 
  $conexion = conexion(); // CREA LA CONEXION
  // REALIZA LA QUERY A LA DB
  $registros = mysqli_query($conexion, "SELECT * FROM unidad");
  
  // RECORRE EL RESULTADO Y LO GUARDA EN UN ARRAY
  while ($resultado = mysqli_fetch_array($registros))  
  
  {
    $datos[] = $resultado;
  }
  
  $json = json_encode($datos); // GENERA EL JSON CON LOS DATOS OBTENIDOS

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Proyecto pàgina</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        
		<link href="css/styles.css" rel="stylesheet" />
		
		
		
    </head>
    <body>
        <!-- Responsive navb-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
              <!--   <a class="navbar-brand" href="#!">PRIMER BLOQUE</a><-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="paqueteria.php">Paqueteria</a></li>
                        <li class="nav-item"><a class="nav-link" href="">Boletos</a></li>
                        <li class="nav-item"><a class="nav-link" href="vistaunidades.php">Unidades</a></li>
                        <li class="nav-item"><a class="nav-link" href="Usuarios.php">Usuarios</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2"></h1>
                            <p class="lead text-white-50 mb-4">Busca y reserva fácilmente tu próximo viaje</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                
                                <a class="btn btn-outline-light btn-lg px-4" href="">VENTA BOLETO</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="registrousuario.html">REGISTRAR USUARIO</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="">REGISTRAR UNIDAD</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
					
					  <table class = "table">
						<thead>
						  <tr>
							<th> Id Unidad</th>
							<th> Matricula</th>
							<th> Marca</th>
							<th> Modelo </th>
							<th> Fecha Ingreso</th>
					
						  </tr>
			  
			  <thead</>
			  <?php foreach ($datos as $datos1) {?>
				<tr> 
				  <th><?php echo $datos1['IdUnidad'];?> </th>
				  <th><?php echo $datos1['Matricula'];?> </th>
				  <th><?php echo $datos1['Marca'];?> </th>
				  <th><?php echo $datos1['Modelo'];?> </th>
				  <th><?php echo $datos1['Fecha_Ingreso'];?> </th>
				 
			  
			  </tr> 
			  
			  <?php }?>
					  </table>
        
		</div>
         <footer class="py-5 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white">Copyright © 2023 Cooperativa de Transportes VOISAL - Viaja en bus a Oaxaca,Cd.Mexico, Veracruz, Chiapas,Queretaro. Compra tus pasajes aqui!</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
		
         <!--Aqui termina la caja 1//// SE PUEDE COLOCAR ALGUN BLOQUE -->
    </body>
</html>
