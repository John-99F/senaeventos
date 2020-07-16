<?php
require_once'connect.php';
class Eventos
{
    private $formacion;
    private $ficha;
    private $competencia;
    private $resultado;
    private $ambiente;
    private $instructor;
    private $hora;
    private $dia;
    private $trimestre;

    function __construct($arg)
    {
        $this->$idEventos['idEventos'];
        $this->$formacion=$arg['formacion'];
        $this->$ficha=$arg['ficha'];
        $this->$competencia=$arg['competencia'];
        $this->$resultado=$arg['resultado'];
        $this->$ambiente=$arg['ambiente'];
        $this->$instructor=$arg['instructor'];
        $this->$hora=$arg['hora'];
        $this->$dia=$arg['dia'];
        $this->$trimestre=$arg['trimestre'];

    }

function AgregarHorario()
{
    global $connect;
    $sql= "INSERT INTO eventos VALUES('$this->$formacion',' $this->$ficha','$this->$competencia',
            '$this->$resultado','$this->$ambiente','$this->$instructor','$this->$hora','$this->$dia',
            '$this->$ficha','$this->$trimestre')";
   
   return $connect->query($sql);
   
    }


public static function ConsultarEventos()
{
    global $connect;
    $sql="SELECT * FROM eventos";
    return $result= $connect->query($sql);
}


public static function Actualizar($valor)
{
    global $connect;
    $sql="SELECT*from eventos WHERE idEventos=$valor";

    return $result=$connect->query($sql);
}

public static function ActualizarEventos($valor)
{
    global $connect;
    $sql="UPDATE eventos SET idEventos = $this->idEventos ,
            formacion= $this->formacion, ficha=$this->ficha, competencia=$this->competencia,
            resultado= $this->resultado, ambiente=$this->ambiente,instructor=$this->instructor,idFicha=$this->ficha,
            trimestre=$this->trimestre  WHERE idEventos= $valor" ;
    return $connect->query($sql);

}


public static function eliminar($idEventos)
{
    global $connect;
    $sql="DELETE FROM eventos WHERE idEventos = $idEventos";
    return $connect->query($sql);

}

public static function arrayeventos()
{
    return['formacion'=>$_POST['formacion'], 'ficha'=>$_POST['ficha'],'competencia'=>$_POST['competencia'],
        'resultado'=>$_POST['resultado'],'ambiente'=>$_POST['ambiente'],'hora'=>$_POST['hora'],'dia'=>$_POST['dia'],
        'ficha'=>$_POST['idFicha'],'trimestre'=>$_POST['trimestre']];

}
}
?>
