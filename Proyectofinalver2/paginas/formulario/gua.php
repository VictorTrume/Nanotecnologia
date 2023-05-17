<?php
include("abr.php");

$Nombre =$_POST ['Nombre'];
$Marca =$_POST['Marca'];
$Frecuencia =$_POST['Frecuencia'];
$Restaurante =$_POST['Restaurante'];
$PF =$_POST['PF'];



$consulta = "INSERT INTO estudiantes (Nombre, Marca, Frecuencia, Restaurante, PF) VALUES ('$Nombre','$Marca','$Frecuencia','$Restaurante','$PF')";

if ($conexion -> query ($consulta)=== TRUE){
    header("Location: index.php");
}
else{
    echo "Error: ". $consulta. "<br>". $conexion -> error;
}

$conexion-> close();

?>

