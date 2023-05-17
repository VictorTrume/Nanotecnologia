<?php

$conexion = new mysqli ("Localhost", "root","","postres");
if($conexion){
    /*echo "la gestion fue exitosa !!";*/
    header ("Location: index.php");

} else{
    echo "Fallo la gestion";
}

?>