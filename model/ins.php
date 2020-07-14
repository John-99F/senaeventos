<?php
require_once'connect.php';

class Ins{

 public $id;
 private $nombre;
 private $apellido;
 private $contrato;
 private $disponibilidad;
 private $especialidad;
 private $idCompetencia;
 private $idAntes;

    function __construct($arg)
    {
        $this->id = $arg['id'];
        $this->nombre = $arg['nombre'];
        $this->apellido = $arg['apellido'];
        $this->contrato = $arg['contrato'];
        $this->disponibilidad = $arg['disponibilidad'];
        $this->especialidad = $arg['especialidad'];
        $this->idCompetencia = $arg['idCompetencia'];
    }


    public function create()
    {
        global $connect;
        $sql= "INSERT INTO instructor VALUES('$this->id','$this->nombre',
                '$this->apellido','$this->contrato','$this->disponibilidad',
                '$this->especialidad','$this->idCompetencia')";
        return $connect->query($sql);
    }
    


    public static function read()
    {
        global $connect;
        $sql="SELECT * FROM instructor";
        return $result = $connect->query($sql);
    }

    public static function update($valor)
    {
        global $connect;
        $sql="SELECT * FROM instructor WHERE idInstructor = $valor";
        return $result = $connect->query($sql);
    }

    public static function delete($idInstructor)
    {
        global $connect;
        $sql=" DELETE FROM instructor WHERE idInstructor = $idInstructor";
        return $connect->query($sql);
    }

    public function modifyIns($valor)
    {
        global $connect;
        $sql= "UPDATE instructor SET idInstructor = $this->id ,
         nombreInstructor = $this->nombre, apellidoInstructor = $this->apellido,
         contrato = $this->contrato, diponibilidad = $this->disponibilidad,
         especialidad = $this->especialidad, idCompetencia = $this->idCompetencia
          WHERE idInstructor = $valor";
        return $connect->query($sql);
    }

    public static function arrayIns()
    {
       return ['id' => $_POST['id'], 'nombre' => $_POST['nombre'],
            'apellido' => $_POST['apellido'], 'contrato' => $_POST['contrato'],
            'disponibilidad' => $_POST['disponibilidad'],'especialidad' => $_POST['especialidad'],
            'idCompetencia' => $_POST['idCompetencia']] ;
    }
}

?>