<?php

include("conexion.php");

$eliminar=eliminarf($_GET['id']);

function eliminarf($e){
    $con=mysqli_connect("localhost:3306","root","123456789","proyectoD");
    $Peticion=mysqli_query($con,"DELETE FROM ficha WHERE idFicha = '".$e."'");

}

?>

<script type="text/javascript">
alert("Ficha Eliminada");
window.location.href="Ficha2.php";

</script>