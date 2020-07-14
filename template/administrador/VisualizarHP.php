<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar</title>
</head>
<body>

   <center><header><h1>VISUALIZAR HORARIO</h1></header></center> 
   <center> <form action="" method="POST">
    Digita la ficha : 
    <input type="text" name="CampoFicha" id="CampoF">
    Digita el trimestre : 
    <input type="text" name="CampoT" id="Campo">    
    <button name="bBuscar" >Buscar</button>
  

    </form></center><br><br>

      <center> <table id="TablaB">
    <?php
    include("Funciones.php");
    $Conexion=Conectar();
    $Consulta=ConsultarHorario();
    ?>
    </table></center>
<center><button>Descagar</button>
<button>Visualizar Navegador</button></center>
</body>
</html>