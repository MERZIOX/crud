<html>

<head>
    <link rel="stylesheet" href="..\CSS\bootstrap.css">
    <link rel="stylesheet" href="..\CSS\style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="..\JS\jquery-3.4.1.min.js"></script>
  <title>Problema</title>
</head>

<body>

  <?php

$id = $_GET['id'];


  require_once("conexion.php");

  $registros = mysqli_query($conexion, "select * from registro
                        where id= '$id'") or
    die("Problemas en el select:" . mysqli_error($conexion));
  if ($reg = mysqli_fetch_array($registros)) {
    
    
    $nombre1 = $reg['primer_nombre'];
    $nombre2 = $reg['segundo_nombre'];
    $apellido1 = $reg['primer_apellido'];
    $apellido2 = $reg['segundo_apellido'];
    $correo = $reg['correo'];

    



    ?>






<div class="container-fluid mx-auto" id="contenedor" >
<nav>
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
              <a class="nav-link" href="../index.html">Ingresar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ver-2.php">Ver</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="">Modificar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
    </nav>
    <br>
<form action="actualizar.php" method="POST">
        
        <div class="col-lg-4 border mx-auto">
            <label  class="text-label" for="" > Cedula</label>
            <input name="id" type="text" class="form-control" value="<?php echo $id ?>" placeholder="" readonly>              
            <div class="row">
            <div class="col-lg-6">
            <label class="text-label" for=""> Nombre1</label>
            <input name="primer_nombre" type="text" class="form-control" value="<?php echo $nombre1 ?>" placeholder="">            
            </div>
            
            <div class="col-lg-6">
            <label class="text-label" for=""> Nombre2</label>
            <input name="segundo_nombre" type="text" class="form-control" value="<?php echo $nombre2 ?>" placeholder="">            
            </div>    
            </div>
            <div class="row">
            <div class="col-lg-6">
            <label class="text-label" for=""> Apellido1</label>
            <input name="primer_apellido" type="text" class="form-control" value="<?php echo $apellido1 ?>" placeholder="">            
            </div>
            <div class="col-lg-6">
            <label class="text-label" for=""> Apellido2</label>
            <input name="segundo_apellido" type="text" class="form-control" value="<?php echo $apellido2 ?>" placeholder="">            
        </div>
        </div>
               
            <label class="text-label" for=""> Correo </label>
            <input name="correo" type="email" class="form-control" value="<?php echo $correo ?>" placeholder="">
            
        </div>
<br>
        <div class="row border mx-auto d-flex justify-content-center">
            <div class="col-lg-3">
                <button id="valid" class="control-form btn btn-success btn-block" type="submit" value=""
                onclick= "" > ACTUALIZAR </button>
            </div>
            <div class="col-lg-3 ">
                <button id="delete" class="control-form btn btn-danger btn-block" type="submit" value="">LIMPIAR FORM</button>
            </div>
            <br>
        </div>
    </form>
    
</div>

   

  <?php
  } else{
    echo "No existe registro con dicho ID/Cedula";}
    
  ?>

</body>

</html>