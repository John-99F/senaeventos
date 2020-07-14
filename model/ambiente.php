<?php
require_once'connect.php';

class Ambiente{

 private $idAmbiente;
 private $numeroAmbiente;
 private $descripcionAmbiente;
 private $horaUso;
 private $tipoFormacion;
 private $capacidad;
 private $idCentro;
 

    function __construct($arg)
    {
        $this->idAmbiente = $arg['idAmbiente'];
        $this->numeroAmbiente = $arg['numeroAmbiente'];
        $this->descripcionAmbiente = $arg['descripcionAmbiente'];
        $this->horaUso = $arg['horaUso'];
        $this->tipoFormacion = $arg['tipoFormacion'];
        $this->capacidad = $arg['capacidad'];
        $this->idCentro = $arg['idCentro'];
    }


    public function create()
    {
        global $connect;
        $sql= "INSERT INTO ambiente VALUES('$this->idAmbiente','$this->numeroAmbiente',
                '$this->descripcionAmbiente','$this->horaUso','$this->tipoFormacion',
                '$this->idCentro','$this->idCentro')";
        return $connect->query($sql);
    }
    


    public static function read()
    {
        global $connect;
        $sql="SELECT * FROM ambiente";
        return $result = $connect->query($sql);
    }

    public static function update($valor)
    {
        global $connect;
        $sql="SELECT * FROM ambiente WHERE idAmbiente = $valor";
        return $result = $connect->query($sql);
    }

    public static function delete($idAmbiente)
    {
        global $connect;
        $sql=" DELETE FROM ambiente WHERE idAmbiente = $idAmbiente";
        return $connect->query($sql);
    }

    public function modifyAmbiente($valor)
    {
        global $connect;
        $sql= "UPDATE ambiente SET idAmbiente = $this->idAmbiente ,
         numeroAmbiente = $this->numeroAmbiente, descripcionAmbiente = $this->descripcionAmbiente,
         horaUso = $this->horaUso, tipoFormacion = $this->tipoFormacion,
         capacidad = $this->capacidad, idCentro = $this->idCentro
          WHERE idAmbiente = $valor";
        return $connect->query($sql);
    }

    public static function arrayAmbiente()
    {
       return ['idAmbiente' => $_POST['idAmbiente'], 'numeroAmbiente' => $_POST['numeroAmbiente'],
            'descripcionAmbiente' => $_POST['descripcionAmbiente'], 'horaUso' => $_POST['horaUso'],
            'tipoFormacion' => $_POST['tipoFormacion'],'capacidad' => $_POST['capacidad'],
            'idCentro' => $_POST['idCentro']] ;
    }
}

?>