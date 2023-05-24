<?php

include_once "../conexion.php";

    if(!isset($_POST['enviar'])|| empty($_POST['codi_dept'])|| empty($_POST['nom_dept'])){
    header('Location:../pagina2.php');
} else{
    $codi=$_POST['codi_dept'];
    $nom=$_POST['nom_dept'];
    $query=$connection->prepare('UPDATE departament SET 
    codi_dept=?,
    nom_dept=?
    WHERE id_dept=?');
    $query->bind_param('is',$codi,$nom);
    $query->execute();
    header('Location:../pagina2.php');
};