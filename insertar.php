<?php
include("conexion.php");
$con=conectar();

$cod_registro=$_POST['cod_registro'];
$documento=$_POST['documento'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];


$sql="INSERT INTO registro VALUES('$cod_registro','$documento','$nombres','$apellidos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: inicio.php");
    
}else {
}
?>