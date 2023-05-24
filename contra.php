<?php
session_start();
$user=$_POST['user'];
$contra=$_POST['contra'];
if ($user=="admin" and $contra=="1234"){
    $_SESSION['inicio']="activa";
    $user=0;
    $contra=0;
    header("location: pagina2.php");
    exit;
}
else{
    header("location: index.html");
    exit;
}
