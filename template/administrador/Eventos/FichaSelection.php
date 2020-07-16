<?php
require_once"../../../model/connect.php";
$programa=$_POST['programa1'];



    $row=mysqli_query($connect,"SELECT*FROM ficha WHERE idPrograma='$programa'")or die ("Error : ".mysqli_error($connect));
    $lista="Ficha <select id='lFicha' name='lFicha'>";

    while($peticion=mysqli_fetch_array($row)){
        $lista=$lista.'<option value='.$peticion[0].'>'.$peticion[1].'</option>';
    }
    echo $lista."</select>";


?>