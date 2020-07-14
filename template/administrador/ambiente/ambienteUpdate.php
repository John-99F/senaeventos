<?php
require_once'../../../model/ambiente.php';

$r = Ambiente::update($_POST['index']);
$llenar = $r->fetch_assoc();

?>


<!--FORMULARIO
-------------------------------------------------------->


<section>    
  <form action="../../../controller/controlIns.php" method="post">
    <fieldset>
      <legend>Update</legend>
  
      <label  for="idAmbiente">id del Ambiente</label>
      <input required type="number" id="idAmbiente"  
              title="Ingrese el codigo"  value=' <?php echo $_POST['idAmbiente'] ?> ' name="idAmbiente"  >
      
      <label  for="numeroAmbiente">numero del Ambiente</label>
      <input required type="number" id="numeroAmbiente"   
              title="Ingrese el numero del Ambiente"  value=' <?php echo $_POST['numeroAmbiente'] ?> ' name="numeroAmbiente" >
      
      <label  for="descripcionAmbiente">descripcion del Ambiente</label>
      <input required type="text" id="descripcionAmbiente"   
              title="Ingrese la descripcion del Ambiente"  value=' <?php echo $_POST['descripcionAmbiente'] ?> ' name="descripcionAmbiente" >
      
      <label  for="horaUso">hora de Uso</label> 
      <input required type="text" id="horaUso"   
              title=" Ingrese la hora de Uso"  value=' <?php echo $_POST['horaUso'] ?> ' name="horaUso" >
      
      <label  for="tipoFormacion">tipo Formacion</label>
      <input required type="text" id="tipoFormacion"   
              title="Ingrese el tipo Formacion"  value=' <?php echo $_POST['tipoFormacion'] ?> ' name="tipoFormacion"  >
      
      <label  for="capacidad">capacidad</label>
      <input required type="text" id="capacidad"   
              title="Ingrese la capacidad"  value=' <?php echo $_POST['capacidad'] ?> ' name="capacidad">
      
      <label  for="idCentro">id del Centro</label>
      <input required type="text" id="idCentro"   
              title="Ingrese el id Centro"  value=' <?php echo $_POST['idCentro'] ?> ' name="idCentro" >
      <input type="hidden"  name="idAntes"
       value="<?php echo $llenar['idAmbiente'] ?>" >
      <input type="hidden"  name ="ambiente" value="update">

      <button>enviar</button>
    </fieldset>
  </form>
</section>