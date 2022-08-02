<?php

 #variable para card
 
 if (isset($_GET['c'])) {
     $c = $_GET['c'];
     $tc = $_GET['c'];
     $c= "img i INNER JOIN categoria t  ON i.idcategoria=t.idcategoria AND i.idcategoria='$c'";
     $p = $c;
 }else{
    $p= 'img i INNER JOIN categoria t  ON i.idcategoria=t.idcategoria';
 }

 #conexion
 include 'config/conexion.php';
 #consultas para la vista
 //consulta de categoria
 $cat = $baseConectDB->query("SELECT * FROM categoria")->fetchAll(PDO::  FETCH_OBJ);
 //consulta de tarjetas o img
 $card = $baseConectDB->query("SELECT * FROM $p ")->fetchAll(PDO::  FETCH_OBJ);
 #vista html
 include 'views/index.view.php';?>