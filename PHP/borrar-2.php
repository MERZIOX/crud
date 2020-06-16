



<?php

require_once("conexion.php");

$id = $_GET['id'];


$registros = mysqli_query($conexion, "select id from registro where id
= '$id' ") or
die("Problemas en el select:" . mysqli_error($conexion));

if ($reg = mysqli_fetch_array($registros)) {   
mysqli_query($conexion, "delete from registro where id='$_REQUEST[id]'") or
  die("Problemas en el select:" . mysqli_error($conexion));
echo "<script type='text/javascript'>
        alert('Registro borrado exitosamente');
        window.location.href='ver-2.php';
        </script>";
} else {
echo "No existe un alumno con ese mail.";
}
mysqli_close($conexion);


?>




