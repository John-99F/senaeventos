<?php
  require_once'../../../model/ins.php';
  $contenido = Ins::read();
?>

<h2>Gestion de Instructores</h2>

<!--FORMULARIO
-------------------------------------------------------->


<section>    
  <form action="../../../controller/controlIns.php" method="post">
    <fieldset>
      <legend>Create Instructor</legend>
  
      <label  for="id">Cedula</label>
      <input required type="number" id="id"  
              title="Ingrese la cedula"  name="id"  >
      
      <label  for="nombre">Nombres</label>
      <input required type="text" id="nombre"   
              title="Ingrese el nombre"  name="nombre" >
      
      <label  for="apellido">Apellidos</label>
      <input required type="text" id="apellido"   
              title="Ingrese el apellido"  name="apellido" >
      
      <label  for="disponibilidad">Disponibilidad</label> 
      <input required type="text" id="disponibilidad"   
              title=" Ingrese la disponibilidad"  name="disponibilidad" >
      
      <label  for="">Tipo contrato</label>
      <input required type="text" id="contrato"   
              title="Ingrese el tipo de contrato"  name="contrato"  >
      
      <label  for="">Especialidad</label>
      <input required type="text" id="contrato"   
              title="Ingrese la especialidad"  name="especialidad">
      
      <label  for="idCompetencia">Competencias</label>
      <input required type="text" id="idCompetencia"   
              title="Ingrese la competencia"  name="idCompetencia" >

      <input required type="hidden"  name="ins" value="create">

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
        <td><?php echo $valor['idInstructor']; ?> </td>
        <td><?php echo $valor['nombreInstructor']; ?> </td>
        <td><?php echo $valor['apellidoInstructor']; ?> </td>
        <td><?php echo $valor['contrato']; ?> </td>
        <td><?php echo $valor['diponibilidad']; ?> </td>
        <td><?php echo $valor['especialidad']; ?> </td>
        <td><?php echo $valor['idCompetencia']; ?> </td>
        <td>

          <form action="../../../controller/controlIns.php" method="post">
            <input type="hidden" name="ins" value="delete">
            <input type="hidden" name="index" value="<?php echo $valor['idInstructor']; ?>">
            <button>borrar</button>
          </form>

          <form action="insUpdate.php" method="post">
            <input type="hidden" name="ins" value="update">
            <input type="hidden" name="index" value="<?php echo $valor['idInstructor']; ?>">
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