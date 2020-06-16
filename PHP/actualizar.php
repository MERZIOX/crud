<?php
 
 $id = $_POST['id'];
 $nombre1 = $_POST['primer_nombre'];
 $nombre2 = $_POST['segundo_nombre'];
 $apellido1 = $_POST['primer_apellido'];
 $apellido2 = $_POST['segundo_apellido'];
 $correo = $_POST['correo'];



require_once("conexion.php");




mysqli_query($conexion, "
update registro set 
primer_nombre='$nombre1', 
segundo_nombre='$nombre2', 
primer_apellido='$apellido1', 
segundo_apellido='$apellido2', 
correo='$correo' 
where id='$id'") or
die("Problemas en el select:" . mysqli_error($conexion));
echo "<script type='text/javascript'>
alert('Registro actualizado exitosamente exitosamente');
window.location.href='ver-2.php';
</script>";
?>

