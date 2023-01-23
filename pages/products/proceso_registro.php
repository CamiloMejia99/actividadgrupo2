<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Proceso Registro</title>

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

                        <?php

                        include '../../bd/conexion.php';
                        $id = $_POST['id'];
                        $pNombre = $_POST['pNombre'];
                        $pApellido = $_POST['pApellido'];
                        $edad = $_POST['edad'];
                        $comuna = $_POST['comuna']; 
                        $correo = $_POST['correo'];
                        $telefono = $_POST['telefono'];
                        $res="";

                        $sql1 = "SELECT * FROM `usuario` WHERE id=$id;";
                        $sql = "INSERT INTO usuario(id,pNombre, pApellido, edad, comuna,  correo, telefono)
                        values ('$id','$pNombre', '$pApellido','$edad','$comuna','$correo','$telefono' )";


                        if($conexion->query($sql1) == TRUE) {
                          
                          $res="ya existe usuario con cedula $id";

                        }else
                        {
                            if ($conexion->query($sql) == TRUE) {
                            $res="Registro exitoso";
                            
                          }
                          else{
                            $res="Registro rechazado";
                          }
                        }
                        
                        ?>

                        <section class="content">
                          <div class="row">
                            <!-- left column -->
                            <div class="col-md-12">
                              <!-- general form elements -->
                              <div class="card card-success">
                                <div class="card-header">
                                  <h3 class="card-title"> <?php echo $res?>
                                   </h3>
                                </div>
                                <div class="card-footer">
                                    <a href="list.php"  class="btn btn-info"> ← REGRESAR AL LISTADO </a>
                                </div>
                              </div>
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
</body>
</html>
