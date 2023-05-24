<?php

include_once "../conexion.php";

    if(!isset($_POST['enviar'])|| empty($_POST['codi_classe'])|| empty($_POST['nom_classe'])|| empty($_POST['tutor'])){
    header('Location:../pagina2.php');
} else{
    $codi=$_POST['codi_dept'];
    $nom=$_POST['nom_dept'];
    $tutor=$_POST['tutor'];
    $query=$connection->prepare('UPDATE classe SET 
    codi_dept=?,
    nom_dept=?,
    tutor=?
    WHERE id_classe=?');
    $query->bind_param('isi',$codi,$nom,$tutor);
    $query->execute();
    header('Location:../pagina2.php');
};