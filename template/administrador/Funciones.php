<?php

function Conectar(){
    $Conexion=mysqli_connect("localhost:3306","root","123456789","proyectoD");
    $mysqli=$Conexion;
    if(!$mysqli){
        echo ("Error No se pudo conectar con la base de datos :".mysqli_error());
    }
    echo("Conexion exitosa");
    return $mysqli;
}

function AgregarHorario(){
    $Conexion=mysqli_connect("localhost:3306","root","123456789","proyectoD");
    $Conexion->select_db("proyectoD");
    $Conexion->query("INSERT INTO Eventos(formacion,ficha,competencia,resultado,ambiente,instructor,hora,dia,idFicha,trimestre)
    values('$_REQUEST[formacion]','$_REQUEST[ficha]','$_REQUEST[competencia]','$_REQUEST[resultado]','$_REQUEST[Ambiente]','$_REQUEST[instructor]'
    ,'$_REQUEST[hora]','$_REQUEST[dia]','$_REQUEST[ficha]',$_REQUEST[cTrimestre])") or die ("Error : ".mysqli_error($Conexion));
    mysqli_close($Conexion);

}

function ConsultarHorario(){
       $Conexion=mysqli_connect("localhost:3306","root","123456789","proyectoD");
       $peticion=mysqli_query($Conexion,"SELECT*FROM Eventos WHERE idFicha='$_REQUEST[CampoFicha]' AND trimestre='$_REQUEST[CampoT]'")or die ("Error :".mysqli_error($Conexion));    
       echo "<table border='4' id='TablaB'>";
       echo "<tr><td> IdEvento </td><td> Formacion </td><td>Ficha</td><td> Competencia</td><td>Resultado</td>
       <td>Ambiente</td><td>Instructor</td><td>Hora</td><td>Dia</td></tr>\n";
       if($row=mysqli_fetch_array($peticion)){
      
        do{
            echo "<tr><td>".$row['idEvento']."</td><td>".$row['formacion']."</td><td>".$row['ficha']."</td><td>".$row['competencia'].
            "</td><td>".$row['resultado']."</td><td>".$row['ambiente']."</td><td>".$row['instructor']."</td><td>".$row['hora']."</td><td>"
            .$row['dia']."</td></tr>\n";

        } while ($row=mysqli_fetch_array($peticion));
            echo "</table>\n";

}else {
    echo "No se encontro el registro";
}
}


function ModificarHorario(){


}

function EliminarHorario(){



}

function ConsultaTabla(){
    $Conexion=mysqli_connect("localhost:3306","root","123456789","proyectoD");
    $peticion=mysqli_query($Conexion,"SELECT*FROM Eventos")or die ("Error :".mysqli_error($Conexion));    
    echo "<table border='4' id='TablaB'>";
    echo "<tr><td> IdEvento </td><td> Formacion </td><td>Ficha</td><td> Competencia</td><td>Resultado</td>
    <td>Ambiente</td><td>Instructor</td><td>Hora</td><td>Dia</td></tr>\n";
    if($row=mysqli_fetch_array($peticion)){
   
     do{
         echo "<tr><td>".$row['idEvento']."</td><td>".$row['formacion']."</td><td>".$row['ficha']."</td><td>".$row['competencia'].
         "</td><td>".$row['resultado']."</td><td>".$row['ambiente']."</td><td>".$row['instructor']."</td><td>".$row['hora']."</td><td>"
         .$row['dia']."</td></tr>\n";

     } while ($row=mysqli_fetch_array($peticion));
         echo "</table>\n";

}else {
 echo "No se encontro el registro";
}
}



?>
