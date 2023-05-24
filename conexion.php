<?php


try {
    $connection=mysqli_connect('localhost','root','','db_projecte');
        //echo "<script>alert('connexion establecida')</script>";
    } catch (\Exception $e) {
        header("Location: mantenimiento.html");
    }
?>