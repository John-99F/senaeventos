<?php
require_once"../../../model/connect.php";
$centro=$_POST['centro'];

$row=mysqli_query($connect,"SELECT*FROM ambiente WHERE idCentro='$centro'")or die("Error :".mysqli_error($connect));

$lista="Ambiente <select id='lAmbiente' name='lAmbiente'>";

while($peticion=mysqli_fetch_array($row)){
    $lista=$lista.'<option value='.$peticion[0].'>'.$peticion[1].'</option>';
}
echo $lista."</select>";


?>