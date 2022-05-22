<?php

include("conexion.php");
$con=conectar();

$cod_registro=$_POST['cod_registro'];
$documento=$_POST['documento'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$sql="UPDATE registro SET  documento='$documento',nombres='$nombres',apellidos='$apellidos' WHERE cod_registro='$cod_registro'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: inicio.php");
    }
?>