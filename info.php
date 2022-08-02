<?php
 #variable para card
 if (isset($_GET['id'])) {
    $id= $_GET['id'];
  }else{
    header('Location: index.php');
}

 #conexion
 include 'config/conexion.php';
 #consultas para la vista
 //consulta de categoria
 $card = $baseConectDB->query("SELECT * FROM img i INNER JOIN categoria t  ON i.idcategoria=t.idcategoria AND i.id='$id'")->fetchAll(PDO::  FETCH_OBJ);
 #vista html
 include 'views/info.view.php';?>