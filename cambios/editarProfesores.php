<?php

include_once "../conexion.php";

    if(!isset($_POST['enviar'])|| empty($_POST['dni_profe'])|| empty($_POST['nom_profe'])|| empty($_POST['cognom1_profe'])|| empty($_POST['cognom2_prof'] || empty($_POST['email_prof'])|| empty($_POST['telf_prof'])|| empty($_POST['salario'])|| empty($_POST['dept_prof']))){
    header('Location:../pagina2.php');
} else{
    $dniProf=$_POST['dni_profe'];
    $nom=$_POST['nom_profe'];
    $cognom1=$_POST['cognom1_profe'];
    $cognom2=$_POST['cognom2_profe'];
    $email=$_POST['email_prof'];
    $telfProf=$_POST['telf_prof'];
    $salario=$_POST['salario'];
    $dept=$_POST['dept_prof'];
    $query=$connection->prepare('UPDATE professor SET
    nom_profe=?,
    cognom1_profe=?,
    cognom2_profe=?,
    email_prof=?,
    telf_prof=?,
    sal_prof=?,
    dept_prof=?
    WHERE dni_profe=?');
    $query->bind_param('sssssiii',$dniProf,$nom,$cognom1,$cognom2,$email,$telfProf,$salario,$dept);
    $query->execute();
    header('Location:../pagina2.php');
};