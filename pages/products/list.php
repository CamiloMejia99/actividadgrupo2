<?php
include '../../bd/conexion.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Listado de personas </title>
  <link href="https://fonts.googleapis.com/css2?family=Tiro+Devanagari+Hindi&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="img/icon_pag.png">
  <link href="/path/print.css" media="print" rel="stylesheet" />
  <link rel="stylesheet" href="css/diseño1.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"></script>
  <script type="text/javascript" src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min,js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">

  <br>

  <style>
    body {
      background-image: url(img/fondo1.png);
      background-size: cover;
    }
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
      -webkit-appearance: none; 
      margin: 0; 
    }
  </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">

  <font color="white">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <h6>UNIVERSIDAD DE NARIÑO EXTENSIÓN IPIALES</h6>
          <h6>DESARROLLADO POR:</h6>
          <h6>GRUPO 2</h6>
        </div>
        <div class="col-4">
          <img heigth="100" width="100" src="img\udenar.png" alt="No hay imagen">
        </div>
      </div>
    </div>

  </font>

  <div class="divisor"></div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div id="contenedor2" class="col-12">
          <div class="card border-info">
            <div class="card-body">
              <ul class="list-group list-group-light">
                <li class="list-group-item">
                  <div class="container">
                    <div class="row">
                      <div class="col-12">



                        <div class="content-header">
                          <div class="container-fluid">
                            <div class="row mb-2">
                              <div class="col-12">
                                <h1 class="m-0">DATOS PERSONALES</h1>
                              </div>
                              <a href="register.php" class="btn btn-success"> Click aqui para registrar </a>
                              &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp
                              &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp
                              &nbsp &nbsp &nbsp &nbsp 
                              <form action="proceso_buscar.php" method="post">
                                <label for="id">buscar id</label>
                                <input class='col-3 m-1' type="number" class="form-control" id="idBuscar" name="idBuscar" placeholder="id">
                                
                                
                                <button type="submit" class="btn btn-success">
                                  consultar 
                                </button>
                              </form>
                            </div><!-- /.row -->
                          </div><!-- /.container-fluid -->
                        </div>


                        <section class="content">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="card card-primary">
                                <div class="card-header">
                                  <h3 class="card-title">Listado de Personas</h3>
                                </div>
                              </div>

                              <?php
                              $sql = "SELECT * FROM usuario";
                              $i = 0;
                              $resultado = $conexion->query($sql);
                              if ($resultado->num_rows > 0) {
                                echo ('
                                        <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                          <thead>
                                            <tr>
                                              <th>#</th>  
                                              <th>(id) Cedula</th> 
                                              <th>Nombre (s)</th>

                                              <th>Apellido (s)</th>

                                              <th>Edad</th>
                                              <th>comuna</th>
                                              
                                              <th>Correo</th>
                                              <th>Telefono</th>
                                              
                                              <th>Opciones</th>
                                            </tr>
                                          </thead>
                                      ');

                                while ($row = $resultado->fetch_array()) {
                                  $i = $i + 1;
                                  $id = $row['id'];
                                  $pNombre = $row['pNombre'];

                                  $pApellido = $row['pApellido'];

                                  $edad = $row['edad'];
                                  $ciudad = $row['ciudad'];
                                  if ($ciudad == 1){$ciudad= 'puenes';}
                                  if ($ciudad == 2){$ciudad= 'altamira';}
                                  if ($ciudad == 3 ){$ciudad= 'la floresta';}
                                  if ($ciudad == 4 ){$ciudad= 'san vicente';}
                                  if ($ciudad == 5 ){$ciudad= 'el lago';}
                                  if ($ciudad == 6 ){$ciudad= 'el charco';}
                                  if ($ciudad == 7 ){$ciudad= 'los chilcos';}
                                  if ($ciudad == 8 ){$ciudad= 'los marcos';}
                                  if ($ciudad == 9 ){$ciudad= 'san jose';}
                                  if ($ciudad == 10){$ciudad= 'puente del negrito';}
                                  if ($ciudad == 11){$ciudad= 'Otros';}
                                  $correo = $row['correo'];
                                  $telefono = $row['telefono'];


                                  echo ('
                                          
                                          <tbody>
                                            <tr>
                                              <td>' . $i . '</td>
                                              <td>' . $id . '</td>
                                              <td>' . $pNombre . '</td>

                                              <td>' . $pApellido . '</td>

                                              <td>' . $edad . '</td>
                                              <td>' . $ciudad . '</td>
                                              <td>' . $correo . '</td>
                                              <td>' . $telefono . '</td>
                                              <td>
                                                 <a href="edit.php?id=' . $id . '" class="btn btn-default">
                                                  <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="proceso_eliminar.php?id=' . $id . '" class="btn btn-default, table__item__link">
                                                  <i class="fas fa-trash"></i>
                                                </a>
                                              </td>
                                            </tr>
                                        ');
                                }
                                echo ('
                                            </tbody>
                                            </table>
                                        ');
                              }else{
                                echo ('
                                          
                                          <center>
                                            <h1> NO HAY DATOS QUE MOSTRAR </h1>
                                          </center>
                                        ');
                              }
                              ?>
                            </div>
                          </div>
                        </section>
                        <!--------------------->
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  mysqli_close($conexion);

  ?>
  <script src="js/confirmacion.js"></script>
</body>

</html>