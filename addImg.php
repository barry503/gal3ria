<?php
 #conexion
 include 'config/conexion.php';
 #variales
 if ($_POST) {
   #insertamos la imagen
   if (isset($_FILES["imagen"])){
    $target_dir="fotos/";
    $image_name = time()."_".basename($_FILES["imagen"]["name"]);
    $target_file = $target_dir . $image_name;
    $imagenType = pathinfo($target_file,PATHINFO_EXTENSION);
    $pesoImg=$_FILES["imagen"]["size"];
    /* Inicio Validacion*/
    if(($imagenType != "jpg" && $imagenType != "png" && $imagenType != "jpeg" && $imagenType != "gif" ) and $pesoImg>0) {
      $errors[]= "<p>Lo sentimos, sólo se permiten archivos JPG , JPEG, PNG y GIF.</p>";
          } else if ($pesoImg > 5048576) {//1048576 byte=1MB
            $errors[]= "<p>Lo sentimos, pero el archivo es demasiado grande. Selecciona una imagen de menos de 5MB</p>";
          }else{
            /* Fin Validacion*/
            if ($pesoImg>0){
              move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file);
              $url = $image_name;
            }
            
             }
         }
         
   $nombre =$_POST['nombre'];
   $descripcion =$_POST['descripcion'];
   $categoria =$_POST['categoria'];
   #consulta para agregar img
   $sql = $baseConectDB->prepare("INSERT INTO img (id, url, nombre, descripcion, idcategoria) VALUES (NULL, '$url', '$nombre', '$descripcion', '$categoria')");
    $execute = $sql->execute();
    
 }
//consulta de categoria
 $cat = $baseConectDB->query("SELECT * FROM categoria")->fetchAll(PDO::  FETCH_OBJ);
?>




<?php 
 #vista html
 include 'views/addImg.view.php';?>

 ?>