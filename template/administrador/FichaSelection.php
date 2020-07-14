<?php
include("Funciones.php");
$programa=$_POST['programa1'];


    $Conectar=Conectar();
    $row=mysqli_query($Conectar,"SELECT*FROM ficha WHERE idPrograma='$programa'")or die ("Error : ".mysqli_error($Conectar));
    $lista="Ficha <select id='lFicha' name='lFicha'>";

    while($peticion=mysqli_fetch_array($row)){
        $lista=$lista.'<option value='.$peticion[0].'>'.$peticion[1].'</option>';
    }
    echo $lista."</select>";


?>