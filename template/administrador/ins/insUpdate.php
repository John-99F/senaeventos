<?php
require_once'../../../model/ins.php';

$r = Ins::update($_POST['index']);
$llenar = $r->fetch_assoc();

?>


<!--FORMULARIO
-------------------------------------------------------->


<section>    
  <form action="../../../controller/controlIns.php" method="post">
    <fieldset>
      <legend>Update</legend>
  
      <label  for="id">Cedula</label>
      <input required type="number" id="id"  
              title="Ingrese la cedula"   value="<?php echo $llenar['idInstructor'] ?>"  name ="id"  >
      
      <label  for="nombre">Nombres</label>
      <input required type="text" id="nombre"   
              title="Ingrese el nombre"   value="<?php echo $llenar['nombreInstructor'] ?>"  name ="nombre" >
      
      <label  for="apellido">Apellidos</label>
      <input required type="text" id="apellido"   
              title="Ingrese el apellido"   value="<?php echo $llenar['apellidoInstructor'] ?>"  name ="apellido" >
      
      <label  for="disponibilidad">Disponibilidad</label> 
      <input required type="text" id="disponibilidad"   
              title=" Ingrese la disponibilidad"   value="<?php echo $llenar['diponibilidad'] ?>"  name ="disponibilidad" >
      
      <label  for="">Tipo contrato</label>
      <input required type="text" id="contrato"   
              title="Ingrese el tipo de contrato"   value="<?php echo $llenar['contrato'] ?>"  name ="contrato"  >
      
      <label  for="">Especialidad</label>
      <input required type="text" id="contrato"   
              title="Ingrese la especialidad"   value="<?php echo $llenar['especialidad'] ?>"  name ="especialidad">
      
      <label  for="idCompetencia">Competencias</label>
      <input required type="text" id="idCompetencia"   
              title="Ingrese la competencia"   value="<?php echo $llenar['idCompetencia'] ?>"  name ="idCompetencia" >

      <input type="hidden"  name="idAntes"
       value="<?php echo $llenar['idInstructor'] ?>" >
      <input type="hidden"   name ="ins" value="update">

      <button>enviar</button>
    </fieldset>
  </form>
</section>