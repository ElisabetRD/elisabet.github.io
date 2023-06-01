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

    <!-- Testimonial 2-->
    <div class="card">
        <div class="card-body p-4">
            <div class="d-flex">
                <div class="flex-shrink-0"><i class="bi bi-chat-right-quote-fill text-primary fs-1"></i></div>
                <div class="ms-4">
                    <p class="mb-1">Tu seguridad es nuestra máxima prioridad
                        en VOISAL, nos esforzamos por hacer que nuestra plataforma sea lo más segura posible. Pero
                        cuando ocurra algún fraude, queremos que sepas exactamente cómo evitarlo y denunciarlo. Sigue
                        nuestros consejos y ayúdanos a protegerte.</p>
                    <!--- <div class="small text-muted">- Client Name, Location</div> -->
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- Contact section-->
    <section class="bg-light py-5">
        <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5"> <!--RESERVA AQUI-->
                <!--IMAGEN--> <!--IMAGEN--> <!--IMAGEN--> <!--IMAGEN--> <!--IMAGEN--> <!--IMAGEN--> <!--IMAGEN-->
                <div style="text-align:center;"> <!--- centrar imagen-->
                    <img src="img/suburban1.jpg" width="700" height="350">
                </div>
                <!--  <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div> -->
                <h2 class="fw-bolder">RESERVA AQUI</h2>
                <p class="lead mb-0">Viaje seguro y economicos</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                 
                    <form action="guardar_reservaciones.php" method="post">

                        <label> Nombre: </label>
                        <input type="text" id="Name" name="nombre" /> <br><br>

                        <label> Correo electronico:</label>
                        <input type="text" id="Email" name="correo" /> <br><br>


                        <label> Destino: </label>
                        <input type="text" id="Destiny" name="destino" /> <br><br>

                        <label> Fecha y hora: </label>
                        <input type="datetime-local" name="fecha" /> <br><br>


                        <label for="Num">Asiento:</label>
                        <input id="Number" type="number" name="asiento" value="0" /> <br><br>

                        <label> Telefono: <input type="Phone" name="telefono" /> <br><br>

                            <fieldset>
                                <label>Sexo:</label>
                                <label>
                                    <input id="radio" type="radio" name="sexo" value="Mujer"> Mujer
                                </label>
                                <label>
                                    <input id="radio" type="radio" name="sexo" value="Hombre"> Hombre
                                </label>

                            </fieldset> <br>
                            <select id="unidad" name= "unidad">
                                <option value= "0"> seleccione unidad</option>
                                <?php
    include_once "db2.php";
    $sentencia = $base_de_datos->query ("SELECT*FROM unidad;");
    $unidades= $sentencia -> fetchALL(PDO::FETCH_OBJ);
    ?>

<?php foreach ($unidades as $unidad) { ?>
    <option value= "<?php echo $unidad->IdUnidad?>"><?php echo $unidad->Matricula ?> 
    </option>

    <?php } ?>
                                </select>

                                <select id="cliente" name= "cliente">
                                <option value= "0"> seleccione cliente</option>
                                <?php
    include_once "db2.php";
    $sentencia = $base_de_datos->query ("SELECT*FROM cliente;");
    $clientes= $sentencia -> fetchALL(PDO::FETCH_OBJ);
    ?>

<?php foreach ($clientes as $cliente) { ?>
    <option value= "<?php echo $cliente->IdCliente?>"><?php echo $cliente->Nombre ?> 
    </option>

    <?php } ?>
                                </select>

                                <select id="trabajador" name= "trabajador">
                                <option value= "0"> seleccione trabajador</option>
                                <?php
    include_once "db2.php";
    $sentencia = $base_de_datos->query ("SELECT*FROM trabajador;");
    $trabajadores= $sentencia -> fetchALL(PDO::FETCH_OBJ);
    ?>

<?php foreach ($trabajadores as $trabajador) { ?>
    <option value= "<?php echo $trabajador->IdTrabajador?>"><?php echo $trabajador->Nombre ?> 
    </option>

    <?php } ?>
                                </select>
                                <br>

                            <br><br><input class="btn btn-info" type="submit" value="Guardar">
                    </form>



                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container px-5">
            <p class="m-0 text-center text-white">Copyright © 2023 Cooperativa de Transportes VOISAL - Viaja en bus a
                Oaxaca,Cd.Mexico, Veracruz, Chiapas,Queretaro. Compra tus pasajes aqui!</p>
        </div>
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