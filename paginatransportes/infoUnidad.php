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
  
  $json = json_encode($datos); 
 

//$sentencia = $base_de_datos->query("SELECT * FROM envio_paquete;");

//Devuelve un array que contiene todas las filas del conjunto de resultados
//$datos1 = $sentencia->fetchAll(PDO::FETCH_OBJ);

  
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
       
    </head>
    <body>
        <!-- Responsive navb-->
        <!-- Responsive navb-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
              <!--   <a class="navbar-brand" href="#!">PRIMER BLOQUE</a><-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="infoPaquetes.php">Paqueteria</a></li>
                        <li class="nav-item"><a class="nav-link" href="vistaresevaciones.php">Boletos</a></li>
                        <li class="nav-item"><a class="nav-link" href="infoUnidad.php">Unidades</a></li>
                        <li class="nav-item"><a class="nav-link" href="infoUsuarios.php">Usuarios</a></li>
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
                                
                                <a class="btn btn-outline-light btn-lg px-4" href="reservar_formulario.php">VENTA BOLETO</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="paqueteria.php">ENVIO PAQUETE</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="registrousuario.html">REGISTRAR USUARIO</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="registrounidad.html">REGISTRAR UNIDAD</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        </section>
        <!-- Contact section-->
        <section class="bg-light py-5">
            <div class="container px-5 my-5 px-5">
                <div class="text-center mb-5">   <!--RESERVA AQUI-->
				
                  <!--  <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div> -->
                    <h2 class="fw-bolder">Unidades Registradas</h2>
                   
                </div>
                <div >
                    <div >
                      
                        <div >
    <div >
      <div class = "col-md-12">
        <table class="table table-hover">
          <thead>
            <tr> 
              <th> Id unidad</th>
              <th> Matricula </th>
              <th> Marca </th>
              <th> Modelo </th>
              <th> FechaIngreso </th>
            </tr>
 
<thead</>
<?php foreach ($datos as $datos1) {?>
  <tr> 
    <th><?php echo $datos1['IdUnidad'];?> </th>
    <th><?php echo $datos1['Matricula'];?> </th>
    <th><?php echo $datos1['Marca'];?> </th>
    <th><?php echo $datos1['Modelo'];?> </th>
    <th><?php echo $datos1['Fecha_Ingreso'];?> </th>
    <td><?php echo "<button type='button' class='btn btn-danger' > <a href='eliminarU.php?IdUnidad=".$datos1["IdUnidad"]."' class='link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover'>ELIMINAR</a></button>"?></td> 
    
	
</tr> 
<?php }?> 
        </table>
       </div>
     </div>
   </div> 
              </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white">Copyright © 2023 Cooperativa de Transportes VOISAL - Viaja en bus a Oaxaca,Cd.Mexico, Veracruz, Chiapas,Queretaro. Compra tus pasajes aqui!</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>