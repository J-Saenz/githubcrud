<?php

include("conexion.php");
$con=conectar();

$cod_registro=$_GET['id'];

$sql="DELETE FROM registro  WHERE cod_registro='$cod_registro'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: inicio.php");
    }
?>
