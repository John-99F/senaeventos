<?php
include("Funciones.php");
$Conectar=Conectar();
$centro1=$_POST['centrop'];

    $row=mysqli_query($Conectar,"SELECT * FROM programaformacion WHERE idCentro='$centro1'")or die ("Error : ".mysqli_error($Conectar));
    $lista="Programa <select id='lPrograma' name='lPrograma'>";

    while($peticion=mysqli_fetch_array($row)){
        $lista=$lista.'<option value='.$peticion[0].'>'.$peticion[4].'</option>';
    }
    echo $lista."</select>";




?>