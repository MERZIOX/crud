<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="..\CSS\bootstrap.css">
  <link rel="stylesheet" href="..\CSS\style-ver.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/763b114892.js" crossorigin="anonymous"></script>
  <script src="..\JS\jquery-3.4.1.min.js"></script>
  <title>Document</title>
</head>

<body>

  <?php
  require_once("conexion.php");

  $registros = mysqli_query($conexion, "select id,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,correo
                        from registro") or
    die("Problemas en el select:" . mysqli_error($conexion));
  ?>

  <div id="contenedor" class="container-fluid">
    <nav>
      <ul class="nav nav-pills nav-justified">
        <li class="nav-item">
          <a class="nav-link" href="..\index.html">Ingresar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="ver-2.php">Ver</a>
        </li>
     
      </ul>
    </nav>
    <br>
    <div class="row">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">ID/Cedula</th>
            <th scope="col">primer_nombre</th>
            <th scope="col">segundo nombre</th>
            <th scope="col">primer apellido</th>
            <th scope="col">Segundo apellido</th>
            <th scope="col">Correo</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
           
          <?php
          while ($reg = mysqli_fetch_array($registros)) {
            ?>
     
      <tr class="actual">
      <th  scope="row">
      <input class="form-control" type="text" value="<?php echo $reg['id'] ?>" readonly> </th>
      <td> <?php echo $reg['primer_nombre'] ?></td>
      <td> <?php echo $reg['segundo_nombre'] ?></td>
      <td> <?php echo $reg['primer_apellido'] ?> </td>
      <td> <?php echo $reg['segundo_apellido'] ?> </td>
      <td> <?php echo $reg['correo'] ?> </td>
      
      <td>
        
      
      <a id="edit" class="btn fa fa-pen" href="modificar.php?id=<?php echo $reg['id']; ?>"></a>
      <a id="del" class="btn fa fa-trash-alt" href="borrar-2.php?id=<?php echo $reg['id']; ?>"></a>
      </td>

    </tr>
  
    
      <br>
    </div>
    </div>

          <?php
          }

          mysqli_close($conexion);
          
          ?>
        </tbody>
      </table>
    </div>
    


</body>

</html>