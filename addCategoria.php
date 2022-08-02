<?php
 #conexion
 include 'config/conexion.php';
 #variales
 if ($_POST) {
   $nombre =$_POST['nombre'];
   $color =$_POST['color'];
   #consulta para agregar img
   $sql = $baseConectDB->prepare("INSERT INTO categoria (idcategoria, name, color) VALUES (NULL, '$nombre', '$color')");
    $execute = $sql->execute();
 }
    

?>




<?php 
 #vista html
 include 'views/categoria.view.php';?>

 ?>
