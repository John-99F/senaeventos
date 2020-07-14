<?php
  include("conexion.php");
        $Conexion=Conectar();
     $Recibe=ConsultarF($_GET['id'])or die("ERROR : ".mysqli_error($Conexion));

     function ConsultarF($id_f){
        $Conectar=mysqli_connect("localhost:3306","root","123456789","proyectoD");
        $peticion=mysqli_query($Conectar,"SELECT*FROM ficha WHERE idFicha='".$id_f."'")or die("ERROR : ".mysqli_error($Conectar));
        $row=mysqli_fetch_assoc($peticion);
        return[
            $row['idFicha'],
            $row['numeroFicha'],
            $row['numeroAprendices'],
            $row['idPrograma'],
            $row['jornada'],
            $row['trimestre'],
            $row['fechaInicio'],
            $row['fechaFinal']


        ];
     }
               
        ?>



<html>
    <head>

    </head>
,<body>
    <center>

             <h1>MODIFICAR FICHA</h1>

    </center>
        <div>
           <center> <form action="">
                    Id Ficha: <br><input type="number" name="IdFicha" size="40" value="<?php echo $Recibe['0']?>"><br>
                    Numero Ficha : <br><input type="text" name="NumeroFicha" size="38" value="<?php echo $Recibe['1']?>"><br>
                    Numero de Aprendices : <br><input type="text" name="NAprendices" size="30" value="<?php echo $Recibe[2]?>"><br>
                    Id Programa : <br><input type="text" name="IdPrograma" size="39" value="<?php echo $Recibe[3]?>"><br>
                    Jornada : <br><input type="text" name="jornada" value="<?php echo $Recibe[4]?>"><br>
                    Trimestre : <br><input type="text" name="trimeste" value="<?php echo $Recibe[5]?>"><br>
                    Fecha Inicio : <br><input type="date" name="FechaInicio" value="<?php echo $Recibe[6]?>" ><br>
                    Fecha Final :<br><input type="date" name="FechaFinal" value="<?php echo $Recibe[7]?>"><br>
                   
                   <br><input type="submit" value="Guardar">
                   </form>  
                    <a href="Ficha2.php"><button>Volver</button></a>     
          <?php
        $Conexion;
          $Modificar=ModificarFicha();
          ?>
  
                  
            </center>
        </div>
      
          
    </body>
</html>