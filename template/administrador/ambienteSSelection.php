<?php
include("Funciones.php");
$Conectar=Conectar();
$centro=$_POST['centro'];

$row=mysqli_query($Conectar,"SELECT*FROM ambiente WHERE idCentro='$centro'")or die("Error :".mysqli_error($Conectar));

$lista="Ambiente <select id='lAmbiente' name='lAmbiente'>";

while($peticion=mysqli_fetch_array($row)){
    $lista=$lista.'<option value='.$peticion[0].'>'.$peticion[1].'</option>';
}
echo $lista."</select>";


?>