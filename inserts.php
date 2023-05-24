<?php

include_once "./conexion.php";

$accion=$_POST['accion'];
if ($accion==1){
    $nombreAl=$_POST['nomalu'];
    $apellido1Al=$_POST['apellidoalu'];
    $apellido2Al=$_POST['sapellidoalu'];
    $mailAl=$_POST['mailalu'];
    $DNIal=$_POST['dnialu'];
    $telefAl=$_POST['telfalu'];
    $clase=$_POST['clasealu'];
    if (strlen($nombreAl) > 20 or strlen($nombreAl) < 1) {
        header("location: pagina2.php");
        exit();
    }
    if (strlen($apellido1Al) > 20 or strlen($apellido1Al) < 1) {
        header("location: pagina2.php");
        exit();
    }
    if (strlen($apellido2Al) > 20) {
        header("location: pagina2.php");
        exit();
    }
    if (!filter_var($mailAl, FILTER_VALIDATE_EMAIL)) {
        header("location: pagina2.php");
        exit();
    }
    if (!preg_match("/^\d{8}[A-Z]$/", $DNIal)) {
        header("location: pagina2.php");
        exit();
    }
    if (!preg_match("/^\d{9}$/", $telefAl)) {
        header("location: pagina2.php");
        exit();
    }
    $sql="INSERT INTO ALUMNE VALUE(null,'$nombreAl','$apellido1Al','$apellido2Al','$mailAl','$DNIal','$telefAl', CURDATE(),'$clase');";
    $insertar=mysqli_query($connection, $sql);
}
elseif ($accion==2){
    $DNIprof=$_POST['dniprofe'];
    $nombreProf=$_POST['nomprofe'];
    $apellido1Prof=$_POST['apellidoprofe'];
    $apellido2Prof=$_POST['sapellidoprofe'];
    $mailProf=$_POST['mailprofe'];
    $telefProf=$_POST['telfprofe'];
    $sal=$_POST['salprofe'];
    $departamento=$_POST['deptprofe'];
    if (!preg_match("/^\d{8}[A-Z]$/", $DNIprof)) {
        header("location: pagina2.php");
        exit();
    }
    if (strlen($nombreProf) > 20 or strlen($nombreProf) < 1) {
        header("location: pagina2.php");
        exit();
    }
    if (strlen($apellido1Prof) > 20 or strlen($apellido1Prof) < 1) {
        header("location: pagina2.php");
        exit();
    }
    if (strlen($apellido2Prof) > 20) {
        header("location: pagina2.php");
        exit();
    }
    if (!filter_var($mailProf, FILTER_VALIDATE_EMAIL)) {
        header("location: pagina2.php");
        exit();
    }
    if (!preg_match("/^\d{9}$/", $telefProf)) {
        header("location: pagina2.php");
        exit();
    }
    if (strlen($sal) > 5 or strlen($sal) < 4) {
        header("location: pagina2.php");
        exit();
    }
    $sql="INSERT INTO PROFESSOR VALUE('$DNIprof','$nombreProf','$apellido1Prof','$apellido2Prof','$mailProf','$telefProf','$sal','$departamento');";
    $insertar=mysqli_query($connection, $sql);
}
elseif ($accion==3){
    $depNum=$_POST['numdept'];
    $depName=$_POST['nomdept'];
    if (strlen($depNum) !=3) {
        header("location: pagina2.php");
        exit();
    }
    if (strlen($depName) > 20 or strlen($depName) < 1) {
        header("location: pagina2.php");
        exit();
    }
    $sql="INSERT INTO DEPARTAMENT VALUE(null,'$depNum','$depName');";
    $insertar=mysqli_query($connection, $sql);
}
elseif ($accion==4){
    $clasNum=$_POST['numclase'];
    $clasName=$_POST['nomclase'];
    $tut=$_POST['tutor'];
    if (strlen($clasNum) !=3) {
        header("location: pagina2.php");
        exit();
    }
    if (strlen($clasName) > 20 or strlen($clasName) < 1) {
        header("location: pagina2.php");
        exit();
    }
    $sql="INSERT INTO CLASSE VALUE(null,'$clasNum','$clasName','$tut');";
    $insertar=mysqli_query($connection, $sql);
}
header("location: pagina2.php");
exit;