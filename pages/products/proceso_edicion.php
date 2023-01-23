<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Proceso Edicion</title>

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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
    <div class="container" >
      <div class="row">
        <div class="col-8">
          <h6>UNIVERSIDAD DE NARIÑO EXTENSIÓN IPIALES</h6>
          <h6>DESARROLLADO POR:</h6>
          <h6>GRUPO 2</h6>
        </div>
        <div class="col-4">
          <img heigth="100" width="100"src="img\udenar.png" alt="No hay imagen" >
        </div>
      </div>
    </div>

  </font>   

  <div class="divisor"></div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div id="contenedor2"class="col-12">
          <div class="card border-info" >
            <div class="card-body" >
              <ul class="list-group list-group-light">
                <li class="list-group-item">  
                  <div class="container">
                    <div class="row">
                      <div class="col-12">

                        <div class="content-header">
                          <div class="container-fluid">
                            <div class="row mb-2">
                              <div class="col-sm-6">
                                <h1 class="m-0">Edición de Personas</h1>
                              </div>
                            </div>
                          </div>
                        </div>

                        <?php

                        include '../../bd/conexion.php'; 
                        $id = $_POST['id'];
                        $pNombre = $_POST['pNombre'];
                        $pApellido = $_POST['pApellido'];
                        $edad = $_POST['edad'];
                        $comuna = $_POST['comuna'];
                        $correo = $_POST['correo'];
                        $telefono = $_POST['telefono'];
                        
                        $ban=0;
                        if ($id == ' '){
                          $ban=1;
                        }
                        if($pNombre == ""){
                          $ban=1;
                        }
                        if($pApellido == ""){
                          $ban=1;
                        }
                        if($edad == ""){
                          $ban=1;
                        }
                        if($comuna == ""){
                          $ban=1;
                        }
                        if($correo == ""){
                          $ban=1;
                        }
                        if($telefono == ""){
                          $ban=1;
                        }
                        if ($ban==0){
                        $sql="UPDATE usuario SET id = '$id',
                        pNombre = '$pNombre',
                        pApellido = '$pApellido',
                        edad = '$edad',
                        ciudad = '$comuna',
                        
                        correo = '$correo',
                        telefono = '$telefono'
                        where id='$id'";
                        
                        if($conexion->query($sql) === TRUE) {
                          echo('
                            <!-- Main content -->
                            <section class="content">
                              <div class="row">
                                <!-- left column -->
                                <div class="col-md-12">
                                  <!-- general form elements -->
                                  <div class="card card-success">
                                    <div class="card-header">
                                      <h3 class="card-title"> Operación exitosa </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->  
                                  </div>
                                  <!-- /.card -->
                                </div>
                              </div>      
                            </section>
                          ');
                        }
                        else{
                          echo('
                            <!-- Main content -->
                            <section class="content">
                              <div class="row">
                                <!-- left column -->
                                <div class="col-md-12">
                                  <!-- general form elements -->
                                  <div class="card card-danger">
                                    <div class="card-header">
                                      <h3 class="card-title"> Operación fallida </h3>
                                      <h5>Campos vacíos</h5>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->  
                                  </div>
                                  <!-- /.card -->
                                </div>
                              </div>      
                            </section>
                          ');
                        }
                        mysqli_close($conexion);  // Cierra la conexion
                      }else{
                        echo('
                          <!-- Main content -->
                          <section class="content">
                            <div class="row">
                              <!-- left column -->
                              <div class="col-md-12">
                                <!-- general form elements -->
                                <div class="card card-danger">
                                  <div class="card-header">
                                    <h3 class="card-title"> Operación fallida </h3>
                                  </div>
                                  <!-- /.card-header -->
                                  <!-- form start -->  
                                </div>
                                <!-- /.card -->
                              </div>
                            </div>      
                          </section>
                        ');
                      }
                          ?>


                        </div>
                        <div class="card-footer">
                         <a href="list.php"  class="btn btn-info"> ← REGRESAR AL LISTADO </a>
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
<script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>

  </body>
  </html>
