<?php  


function Conectar(){
    $user="root";
    $contra="123456789";
    $db="proyectoD";
    $localhost="localhost:3306";
$conexion=mysqli_connect($localhost,$user,$contra,$db);
$mysqli=$conexion;

    if(!$mysqli){
        die("Error no se pudo conectar a la base de datos ".$db." Por favor verificar conexion :".mysqli_error($mysqli));
    }

        echo "Conexion exitosa <br>";

        return $mysqli;
    }

?>

