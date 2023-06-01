
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Proyecto Transportes</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style> 
        center.{align-text: center}
       </style>
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
				<!--IMAGEN--> <!--IMAGEN-->  <!--IMAGEN--> <!--IMAGEN--> <!--IMAGEN--> <!--IMAGEN--> <!--IMAGEN--> 
				<div style = "text-align:center;"> <!--- centrar imagen-->
		<img src="caja.gif" width="500" height="350">
		</div>
                  <!--  <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div> -->
                    <h2 class="fw-bolder">Bienvenido a nuestro servicio de paqueteria</h2>
                    <p class="lead mb-0">Ingresar datos</p>
                </div>
                <div class="row gx-5 justify-content-center">
                <div class="text-center"> <p class="lead mb-0" >Información del cliente</p></div>
                <div class="col-lg-6">
                         <form action = "Datos.php" method = "post"> 

      <label> Nombre: </label> 
	  <input type="text" name="Nombre"  /> <br><br>
	  <label> Apellido: </label> 
	  <input type="text"  name="Apellido"  /> <br><br>

      <label> Telefono: <input type="number" name="Telefono" minlength="10" maxlength="10" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength); " /> <br><br>
      
      <label> Metodo de pago: </label> 
	  <input type="text" name ="Metodo_Pago"  /> <br><br>

	  <label for="Num">Monto:</label>
      <input name="Cantidad" type="number"  value="0" /> <br><br>
      <div class="form-group">
<label>Hrs y Fecha de Inicio</label>
<input type="datetime-local" class="form-control"  
       name="Fecha_Pago" min="<?php echo  date('Y-m-d\TH:i'); ?>">
</div> <br><br> 
       
      <button> Guardar </>	
      </form>		
                    </div>
                </div>
            </div>   	
                    </div>
                </div>
            </div>    <br><br> <br>	   
            <div class="row gx-5 justify-content-center">
            <div class="text-center"> <p class="lead mb-0" >Información del Paquete</p></div>
                <div class="col-lg-6">
                         <form action = "datos3.php" method = "post"> 
      <label> Id del paquete: </label> 
	  <input type="text"  name="idPaquete"  /> <br><br>
      <label> Peso (kg): </label> 
	  <input type="number"  name="Peso"  /> <br><br>
	  <label> Tamaño (cm): </label> 
	  <input type="text"  name="Tamaño"  /> <br><br>       
      <label> Nombre del destinatario: </label> 
	  <input type="text"  name="Nombre_Destinatario"  /> <br><br>
	  <label> Destino: </label> 
	  <input type="text"  name="Destino"  /> <br><br>
      <label> id de la Unidad : </label> 
	  <input type="number"  name="IdUnidad"  /> 
      <br><br> 
      <div class="form-group">
    <label>Fecha y hora de salida:</label>
    <input type="datetime-local" class="form-control"  
       name="FechaHora_Salida" min="<?php echo  date('Y-m-d\TH:i'); ?>">
       <div class="form-group">
    <label>Fecha y hora de llegada a su destino:</label>
    <input type="datetime-local" class="form-control"  
       name="FechaHora_Llegada" min="<?php echo  date('Y-m-d\TH:i'); ?>">
	   <br><br>
	  <button> Guardar </>	 
	  </form>		
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
