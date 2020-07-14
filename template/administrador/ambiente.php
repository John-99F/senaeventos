<?php
  require_once("function.php");
  $consultaAmbiente = consultaAmbiente();
?>

<head>
    <link rel="stylesheet" type="text/css" href="  ">
</head>

<section class="" >

  <a class=" " href="crudAmbiente.php">Crear</a>

  <form action="ambienteBuscar.php" method="post">

    <select name="tipoAmbiente" id="">
      <option value="idAmbiente">codigo</option>
      <option value="numeroAmbiente">nombre</option>
      <option value="descripcionAmbiente">descripcion</option>
      <option value="horaUso">horaUso</option>
      <option value="tipoFormacion">formacion</option>
      <option value="capacidad">capacidad</option>
      <option value="idCentro">centro</option>
    </select>

    <input type="text" name="busquedad" id="">

    <input type="hidden" name="action" value="buscarAmbiente">
    
    <button>buscar</button>
  </form>
</section>

<section class="">

  <table class="">

    <tr>
      <th class=" ">Codigo</th>
      <th class=" ">numero</th>
      <th class=" ">descripcion</th>
      <th class=" "> horaUso</th>
      <th class=" "> tipoFormacion</th>
      <th class=" "> capacidad</th>
      <th class=" "> idCentro</th>
          
          
    </tr>

    <?php
      while ($valorf = $consultaAmbiente -> fetch_assoc()) {
    ?>

    <tr>
      <td><?php echo $valorf['idAmbiente']; ?> </td>
      <td><?php echo $valorf['numeroAmbiente']; ?> </td>
      <td><?php echo $valorf['descripcionAmbiente']; ?> </td>
      <td><?php echo $valorf['horaUso']; ?> </td>
      <td><?php echo $valorf['tipoFormacion']; ?> </td>
      <td><?php echo $valorf['capacidad']; ?> </td>
      <td><?php echo $valorf['idCompetencia']; ?> </td>

      <td>
          <a href="">eliminar</a>
          <a href="crudAmbiente.php?o=m
              &idAmbiente=<?php echo $valorf['idAmbiente']?>
              &numeroAmbiente=<?php echo $valorf['numeroAmbiente']?>
              &descripcionAmbiente=<?php echo $valorf['descripcionAmbiente']?>
              &horaUso=<?php echo $valorf['horaUso']?>
              &tipoFormacion=<?php echo $valorf['tipoFormacion']?>
              &capacidad=<?php echo $valorf['capacidad']?>
              &idCompetencia=<?php echo $valorf['idCompetencia']?>
              ">modificar</a>
      </td>
    </tr>

    <?php  
      }
    ?>  
  </table>
</section>