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
                              <div class="form-group">
                                <div>
                                  <label for="id">Id</label>
                                  <input type="text" class="form-control" id="id" name="id" value="">
                                  <a class="btn btn-success" href="buscar.php"> Click aqui para consultar </a>
                                </div>

                              </div><!-- /.row -->
                            </div><!-- /.container-fluid -->
                          </div>

                          <div class="card-footer">
                            <a href="list.php" class="btn btn-info"> ← REGRESAR AL LISTADO </a>
                          </div>
                          <section class="content">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="card card-primary">
                                  <div class="card-header">
                                    <h3 class="card-title">Listado de Persona</h3>
                                  </div>
                                </div>


                                <?php
                                $id = $_POST['id'];
                                $sql = "SELECT * FROM usuario WHERE id = '$id'";
                                $i = 0;
                                if ($resultado = $conexion->query($sql)) {
                                  echo ('
                                        <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                          <thead>
                                            <tr>
                                              <th>#</th>  
                                              <th>ID</th> 
                                              <th>Nombres</th>
                                              <th>Apellidos</th>
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
                                    $comuna = $row['comuna'];


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
                                              <td>' . $comuna . '</td>

                                             
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
                                }
                                ?>
                              </div>
                            </div>
                          </section>

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
  <script src="confirmacion.js"></script>
</body>

</html>