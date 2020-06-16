<?php
$id = $_POST['cedula'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];



?>


<?php

$nombresCompletos = $nombres;
$nombre = explode(" ", $nombresCompletos);

$apellidosCompletos = $apellidos;
$apellido = explode(" ", $apellidosCompletos);

$cant = count($nombre);

if ($cant == 2) {
  
  $idr =$id;
  $nombre1 = $nombre[0];
  $nombre2 = $nombre[1];
  $apellido1 = $apellido[0];
  $apellido2 = $apellido[1];
} else {
  if ($cant == 1) {
    
    $idr =$id;
    $nombre1 = $nombre[0];
    $nombre2 = " ";
    $apellido1 = $apellido[0];
    $apellido2 = $apellido[1];
  }
}

?>



<?php
require_once("conexion.php");

mysqli_query($conexion, "insert into registro(id,primer_nombre,segundo_nombre,primer_apellido,segundo_apellido,correo) values 
                       ('$idr','$nombre1','$nombre2', '$apellido1', '$apellido2', '$correo')")
  or die("Problemas en el select" );

mysqli_close($conexion);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="..\css\bootstrap.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Datos</title>
</head>


<body>
  <a href="..\index.html">Regresar</a>


  <h1 class="h1 text-center">GENIAL <br>
    Gracias por unirtenos aqui abajo podras ver todos los datos que registramos de tí. <br>
    Luego se te entregara un codigo para el acceso.</h1>

  <img src="" alt="">


  <table class="table table-bordered">
    <thead class="thead-dark">
      <th>ID/Cedula</th>
      <th>Primer nombre</th>
      <th>Segundo nombre</th>
      <th>Primer apellido</th>
      <th>Segundo apellido</th>
      <th>Correo electronico</th>
    </thead>

    <tbody class="thead-light">
      <td><?php echo " $id " ?></td>
      <td><?php echo " $nombre1 " ?></td>
      <td><?php echo " $nombre2 " ?></td>
      <td><?php echo " $apellido1 " ?></td>
      <td><?php echo " $apellido2 " ?></td>
      <td><?php echo " $correo " ?></td>
      </tr>
      <hr>
    </thead>
  </table>
  <a href="..\index.html" style="font-size: xx-large; color: blue; ">FINALIZAR</a>
  
  
</body>

</html>