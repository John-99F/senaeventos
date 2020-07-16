<?php
require_once'connect.php';
class Ficha
{

private $idFicha;
private $numeroFicha;
private $numAprendices;
private $Programa;
private $jornada;
private $trimestre;
private $fechaInicio;
private $fechaFinal;


function __construct($arg)
{
    $this->$idFicha['idFicha'];
    $this->$numeroFicha['numeroFicha'];
    $this->$numeroAprendices['numeroAprendices'];
    $this->$Programa['idPrograma'];
    $this->$jornada['jornada'];
    $this->$trimestre['trimestre'];
    $this->$fechaInicio['fechaInicio'];
    $this->$fechaFinal['fechaFinal'];
}


function AgregarFicha()
{
    global $connect;
    $sql= "INSERT INTO ficha VALUES('$this->$idFicha',' $this->$numeroFicha','$this->$numeroAprendices',
            '$this->$programa','$this->$jornada','$this->$trimestre','$this->$fechaInicio','$this->$fechaFinal')";
   
   return $connect->query($sql);
}

public static function ConsultarFicha()
{
    global $connect;
    $sql="SELECT * FROM ficha";
    return $result= $connect->query($sql);

}


public static function Actualizar($valor)
{

    global $connect;
    $sql="SELECT*from ficha WHERE idFicha=$valor";

    return $result=$connect->query($sql);

}
public static function ActualizarFicha($valor)
{
    global $connect;
    $sql="UPDATE ficha  SET idFicha = $this->idFicha ,
            numeroFicha= $this->numeroFicha, numeroAprendices=$this->numeroAprendices, idPrograma=$this->programa,
            jornada= $this->jornada, trimestre=$this->trimestre,fechaInicio=$this->fechaInicio,fechaFinal=$this->fechaFinal,
            WHERE idEventos= $valor" ;
    return $connect->query($sql);

}
public static function eliminar($idFicha)
{
    global $connect;
    $sql="DELETE FROM idFicha WHERE idFicha = $idFicha";
    return $connect->query($sql);
}



public static function arrayficha()
{
    return['idFicha'=>$_POST['idFicha'], 'numeroFicha'=>$_POST['numeroFicha'],'numeroAprendices'=>$_POST['numeroAprendices'],
        'idPrograma'=>$_POST['idPrograma'],'jornada'=>$_POST['jornada'],'trimestre'=>$_POST['trimestre'],'fechaInicio'=>$_POST['fechaInicio'],
        'fechaFinal'=>$_POST['fechaFinal']];

}
  
}
?>