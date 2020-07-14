<?php

function Conectar(){
    $conexion=mysqli_connect("localhost:3306","root","123456789","proyectoD");
    $mysqli=$conexion;
    if(!$mysqli){
        die("No se pudo conectar a la base de datos : ".mysqli_error());
    }echo "Conexion Exitosa";
    return $conexion;
}

function InsertarFicha(){
    $conexion=mysqli_connect("localhost:3306","root","123456789","proyectoD");
    $conexion->select_db("FichaD");
    $conexion->query("INSERT INTO ficha(idFicha,numeroFicha,numeroAprendices,idPrograma,jornada,trimestre,fechaInicio,fechaFinal)VALUES('$_REQUEST[IdFicha]','$_REQUEST[NumeroFicha]','$_REQUEST[NAprendices]','$_REQUEST[IdPrograma]','$_REQUEST[jornada]','$_REQUEST[trimeste]','$_REQUEST[FechaInicio]','$_REQUEST[FechaFinal]')")or die ("ERROR :".mysqli_error($conexion)); 
    mysqli_close($conexion);  
}


function ConsultarFichaT(){
    $conexion=mysqli_connect("localhost:3306","root","123456789","proyectoD");
    $peticion=mysqli_query($conexion,"SELECT * FROM ficha")or die("ERROR : ".mysqli_error($conexion)); 
    if($row=mysqli_fetch_array($peticion)){
        echo "<table border='4'>";
        echo "<tr><td>Identificacion</td><td>Numero Ficha</td><td>Numero Aprendices</td><td>Identificacion programa</td><td>Jornada</td><td>Trimestre</td><td>Fecha Inicial</td><td>Fecha Final</td><td><center>Acciones</center></td></td>\n";
        do{
           echo "<tr><td>".$row['idFicha']."</td><td>".$row['numeroFicha']."</td><td>".$row['numeroAprendices']."</td><td>".$row['idPrograma']."</td><td>".$row['jornada']."</td><td>".$row['trimestre']."</td><td>".$row['fechaInicio']."</td><td>".$row['fechaFinal']."</td><td><a href='FichaM.php?id=".$row['idFicha']."'><button>Modificar</button></a><a href='EliminarF.php?id=".$row['idFicha']."'><button>Eliminar</button></a>"."</td><tr> \n";
        }while($row=mysqli_fetch_array($peticion));
        echo "</table>\n";
    }else{
      echo "No se encontro el registro";
    }   
}

function ConsultarFicha(){
    $conexion=mysqli_connect("localhost:3306","root","123456789","proyectoD");
    $peticion=mysqli_query($conexion,"SELECT * FROM ficha")or die("ERROR : ".mysqli_error($conexion)); 

}
function ModificarFicha(){
    $conexion=mysqli_connect("localhost:3306","root","123456789","proyectoD");
    $peticion=mysqli_query($conexion,"UPDATE ficha SET numeroFicha ='$_REQUEST[NumeroFicha]', numeroAprendices ='$_REQUEST[NAprendices]', idPrograma='$_REQUEST[IdPrograma]', jornada='$_REQUEST[jornada]', trimestre='$_REQUEST[trimeste]', fechaInicio = '$_REQUEST[FechaInicio]', fechaFinal= '$_REQUEST[FechaFinal]'WHERE idFicha='$_REQUEST[IdFicha]'")or die("ERROR : ".mysqli_error($conexion));  

 
}

function EliminarFicha($e){
    $con=mysqli_connect("localhost:3306","root","123456789","proyectoD");
    $Peticion=mysqli_query($con,"DELETE FROM ficha WHERE idFicha = '".$e."'");

return $Peticion;
}



?>
