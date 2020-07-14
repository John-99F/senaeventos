<?php
  require_once'../../../model/ambiente.php';
  $contenido = Ambiente::read();
?>

<h2>Gestion de Ambientes</h2>

<!--FORMULARIO
-------------------------------------------------------->


<section>    
  <form action="../../../controller/controlIns.php" method="post">
    <fieldset>
      <legend>Create Ambiente</legend>
  
      <label  for="idAmbiente">id del Ambiente</label>
      <input required type="number" id="idAmbiente"  
              title="Ingrese el codigo"  name="idAmbiente"  >
      
      <label  for="numeroAmbiente">numero del Ambiente</label>
      <input required type="number" id="numeroAmbiente"   
              title="Ingrese el numero del Ambiente"  name="numeroAmbiente" >
      
      <label  for="descripcionAmbiente">descripcion del Ambiente</label>
      <input required type="text" id="descripcionAmbiente"   
              title="Ingrese la descripcion del Ambiente"  name="descripcionAmbiente" >
      
      <label  for="horaUso">hora de Uso</label> 
      <input required type="text" id="horaUso"   
              title=" Ingrese la hora de Uso"  name="horaUso" >
      
      <label  for="tipoFormacion">tipo Formacion</label>
      <input required type="text" id="tipoFormacion"   
              title="Ingrese el tipo Formacion"  name="tipoFormacion"  >
      
      <label  for="capacidad">capacidad</label>
      <input required type="text" id="capacidad"   
              title="Ingrese la capacidad"  name="capacidad">
      
      <label  for="idCentro">id del Centro</label>
      <input required type="text" id="idCentro"   
              title="Ingrese el id Centro"  name="idCentro" >

      <input required type="hidden"  name="ambiente" value="create">

      <button>enviar</button>
    </fieldset>
  </form>
</section>

<!-- TABLA CON CONTENIDO
------------------------------------------------------>

<section>
  <fieldset>
    <legend>Read Instructor</legend>
    <table  >
      <tr >
        <th>Cedula</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Disponibilidad</th>
        <th>Tipo</th>
        <th>Competencias</th>
        <th>Opciones</th>
      </tr>

        <?php
          while ($valor = $contenido -> fetch_assoc()) {
        ?>

      <tr>
        <td><?php echo $valor['idAmbiente']; ?> </td>
        <td><?php echo $valor['numeroAmbiente']; ?> </td>
        <td><?php echo $valor['descripcionAmbiente']; ?> </td>
        <td><?php echo $valor['horaUso']; ?> </td>
        <td><?php echo $valor['tipoFormacion']; ?> </td>
        <td><?php echo $valor['capacidad']; ?> </td>
        <td><?php echo $valor['idCentro']; ?> </td>
        <td>

          <form action="../../../controller/controlIns.php" method="post">
            <input type="hidden" name="ambiente" value="delete">
            <input type="hidden" name="index" value="<?php echo $valor['idAmbiente']; ?>">
            <button>borrar</button>
          </form>

          <form action="ambienteUpdate.php" method="post">
            <input type="hidden" name="ambiente" value="update">
            <input type="hidden" name="index" value="<?php echo $valor['idAmbiente']; ?>">
            <button>modificar</button>  
          </form>
          

        </td>
      </tr>

        <?php  
          }
        ?>

    </table>
  </fieldset>
</section>