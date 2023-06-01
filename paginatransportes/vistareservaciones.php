<?php 
  
include_once "db2.php";

$sentencia = $base_de_datos->query("SELECT * FROM `boletos` INNER JOIN cliente ON boletos.IdCliente = cliente.IdCliente;");

//Devuelve un array que contiene todas las filas del conjunto de resultados
$boletos = $sentencia->fetchAll(PDO::FETCH_OBJ);
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
              <!--   <a class="navbar-brand" href="#!">PRIMER BLOQUE</a><-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="infoPaquetes.php">Paqueteria</a></li>
                        <li class="nav-item"><a class="nav-link" href="vistareservaciones.php">Boletos</a></li>
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





				 <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div> 
                    <h2 class="fw-bolder">boletos</h2>
                   
                </div>
                <div >
                    <div >
                      
                        <div >
    <div >
      <div class = "col-md-12">
        <table class="table table-hover">
          <thead>
            <tr> 
              <th> idBoleto</th>
              <th> Hora de Salida</th>
              <th> Destino </th>
              <th> Unidad </th>
              <th> Asiento </th>
              <th> id de cliente</th>
              <th> nombre de cliente </th>
              <!--<th> Editar </th> -->
              <th> Eliminar </th>
            </tr>
				<?php foreach($boletos as $boleto){ ?>
				<tr>
                <td><?php echo $boleto->IdBoleto ?></td>
					<td><?php echo $boleto->Hora_Salida ?></td>
					<td><?php echo $boleto->Destino ?></td>
					<td><?php echo $boleto->Unidad ?></td>
					<td><?php echo $boleto->Asiento?></td>
					<td><?php echo $boleto->IdCliente ?></td>
                    <td><?php echo $boleto->Nombre ?></td>
                    
                   
            
                    

				
					<!--<td><a class="btn btn-warning" href="<//?php echo "editar.php?id=" . $boleto->IdBoleto?>"><i class="fa fa-edit"></i></a></td> -->
					<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $boleto->IdBoleto?>"><i class="fa fa-trash"></i></a></td>
    
	
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
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
	</div>
<?php   ?>