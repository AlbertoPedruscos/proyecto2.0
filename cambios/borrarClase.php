<?php

if(empty($_GET['id'])){
  header('Location:../pagina2.php');
  }else {
      include_once "../conexion.php";    
      $id=$_GET['id'];
      $query=$connection->prepare('DELETE FROM classe WHERE id_classe=?');
      $query->bind_param('i',$id);
      $query->execute();
header('Location:../pagina2.php');
}