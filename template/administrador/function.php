<?php
require_once('conexion2.php');
$mysqli = new mysqli(BD_HOST,DB_USER,DB_PASSWORD,BD_DATABASE);
if ($mysqli->connect_errno) {
    echo 'error';
    exit;
}
function consultaDatosInstructor($sessionInstructor){
    global $mysqli;
    $sql = "SELECT * FROM generarH WHERE instructorH = $sessionInstructor ";
    return $mysqli -> query($sql);
}

function consultaDatosInvitado($sessionInvitado){
    global $mysqli;
    $sql = "SELECT * FROM generarH WHERE fichaH = $sessionInvitado ";
    return $mysqli -> query($sql);
}

function consultaIns(){
    global $mysqli;
    $sql ="SELECT * FROM instructor ";
    return $mysqli -> query($sql);
}
function consultaFicha(){
    global $mysqli;
    $sql ="SELECT * FROM ficha ";
    return $mysqli -> query($sql);
}
function consultaAmbiente(){
    global $mysqli;
    $sql ="SELECT * FROM ambiente ";
    return $mysqli -> query($sql);
}
function insertInstructor ($cedulaIns,$nombreIns,$apellidoIns,$nacimientoIns,$dispoIns,$tipoIns){
    global $mysqli;
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyz';
    $contrasenaIns  = substr(str_shuffle($caracteres), 0, 10);
     $sql = "INSERT INTO instructor (cedulaIns
     , nombreIns,apellidoIns,nacimientoIns,dispoIns,tipoIns,contrasenaIns)
     VALUES ( '$cedulaIns','$nombreIns','$apellidoIns','$nacimientoIns','$dispoIns','$tipoIns',
     '$contrasenaIns')";
    return $mysqli -> query($sql);    
}
function insertAmbiente($idAmbiente,$nombreAmbiente,$capacAmbiente,$TipoAreaAmbiente){
    global $mysqli;
    $sql = " INSERT INTO ambiente (idAmbiente,nombreAmbiente,capacAmbiente,TipoAreaAmbiente)
    VALUES ('$idAmbiente','$nombreAmbiente','$capacAmbiente','$TipoAreaAmbiente')";
    return $mysqli -> query($sql);
}
function insertFicha ($idFicha,$tipoFicha,$numAprendices){
    global $mysqli;
     $sql = "INSERT INTO ficha (idFicha,tipoFicha,numAprendices)
     VALUES ( '$idFicha','$tipoFicha','$numAprendices')";
    return $mysqli -> query($sql);    
}
function entryIns($cedulaIns){
    global $mysqli;
    $sql = "SELECT contrasenaIns,dispoIns FROM instructor WHERE cedulaIns = '$cedulaIns'";
   return $mysqli -> query($sql); 
}
function insertHorario($fechaH,$horaH,$instructorH,$fichaH,$ambienteH,$duracionH,$horaFinal){
    global $mysqli;
    $sql = "INSERT INTO generarH (fechaH,horaH,instructorH,fichaH,ambienteH,duracionH,horaFinal)
    VALUES ('$fechaH','$horaH','$instructorH','$fichaH','$ambienteH','$duracionH','$horaFinal')";
    return $mysqli -> query($sql);  
}
function examinarHoras($cedulaInsE){
    global $mysqli;
    $sql = "SELECT * FROM generarH WHERE cedulaIns = $cedulaInsE ";
}
function consultaHorarioFecha($mes){
    global $mysqli;
    $sql = "SELECT * FROM generarH where month(fechaH)= $mes ORDER BY fechaH asc ";
    return $mysqli -> query($sql);
}
function updateFicha ($busqueda){
    global $mysqli;
     $sql = "SELECT * FROM ficha WHERE idFicha = '$busqueda'";
    return $mysqli -> query($sql);    
}
function modificarFicha($idFicha,$tipoFicha,$numAprendices,$busqueda){
    global $mysqli;
     $sql = "UPDATE ficha SET idFicha ='$idFicha',tipoFicha ='$tipoFicha',
     numAprendices='$numAprendices' WHERE idFicha = '$busqueda' ";
    return $mysqli -> query($sql);
}
function modificarInstructor($cedulaIns,$nombreIns,$apellidoIns,$nacimientoIns,$dispoIns,$tipoIns,$busqueda){
    global $mysqli;
     $sql = "UPDATE instructor SET cedulaIns ='$cedulaIns',nombreIns ='$nombreIns',
     apellidoIns='$apellidoIns',nacimientoIns='$nacimientoIns',dispoIns='$dispoIns',tipoIns='$tipoIns'
      WHERE cedulaIns = '$busqueda' ";
    return $mysqli -> query($sql);
}
function modificarAmbiente($idAmbiente,$nombreAmbiente,$capacAmbiente,$TipoAreaAmbiente,$busqueda){
    global $mysqli;
     $sql = "UPDATE ambiente SET idAmbiente ='$idAmbiente',nombreAmbiente ='$nombreAmbiente',
     capacAmbiente='$capacAmbiente',TipoAreaAmbiente='$TipoAreaAmbiente'
      WHERE idAmbiente = '$busqueda' ";
    return $mysqli -> query($sql);
}

function buscarIns($busquedad,$buscar)
{
    global $mysqli;
     $sql = "SELECT cedulaIns,nombreIns,apellidoIns,nacimientoIns,dispoIns,
     tipoIns FROM instructor WHERE $busquedad ='$buscar' ";
    return $mysqli -> query($sql);
}
function buscarAmbiente($busquedad,$buscar)
{
    global $mysqli;
     $sql = "SELECT idAmbiente, nombreAmbiente, capacAmbiente,TipoAreaAmbiente                     
    FROM ambiente WHERE $busquedad ='$buscar' ";
    return $mysqli -> query($sql);
}
function verificarInstructor($cedula,$contrasena){
    $result = entryIns($cedula);
    $usr = $result -> fetch_assoc();
    
    if ($contrasena == ($usr['contrasenaIns'])) {
            
        if (($usr['dispoIns']) == 1) {
            session_start();
            $_SESSION['cedulaInsE'] = $cedula;
            header("Location:../template/instructorUser/instructorUser.php");
        }else{
            echo "";
        };
    }else{
        echo "consulte con el administrador";
    }
}

function buscarFicha($tipo,$busqueda){
    global $mysqli;
     $sql = "SELECT * FROM ficha WHERE $tipo  like '%$busqueda%'";
    return $mysqli -> query($sql);

}

?>