<?php
include ("Funciones.php");
$Conexion=Conectar();
$peticionCentro=mysqli_query($Conexion,"SELECT*FROM Centro")or die("Error : ".mysqli_error($Conexion));

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script 
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous">
    </script>
    <title>Generar</title>
</head>
<body>

<header><h1>GENERAL HORARIO</h1></header><BR><BR>
    <div class="Panel-General">
    <form action="" method="POST">

           Centro
           
           <select  id="ListaCentro"> 
                        <option value="0">SELECCIONE :</option>
                        <?php
                             while($row=mysqli_fetch_array($peticionCentro)){


                                ?>
                        <option value="<?php  echo $row['idCentro'];?>"><?php echo $row['nombreCentro']; ?></option>    
                             <?php   
                             }   
                         ?>
                    </select>
                                <br>
            <div id="lAmbiente"></div>  <br>
            <div id="lPrograma"></div> <br>
            <div id="lFicha"></div>
            
                                
                   Instructor <select name="instructor">
                         <option value="0">SELECCIONE :</option>

                                <?php 
                        
                                while($row=mysqli_fetch_array($peticionInstructor)){

                                 ?>
                                 <option value="<?php echo $row['idInstructor']; ?>"><?php echo $row['nombreInstructor'] ?></option>
                                 <?php   
                                }
                        
                                ?>      
                   
                        </select> 
                        <br>

                Competencia <select name="competencia" >
                                <option value="0">SELECCIONE : </option>
                                    <?php

                                    while($row=mysqli_fetch_array($peticionCompetencia)){
                                
                                    ?>
                                    <option value="<?php  echo $row['idCompetencia'];?>"><?php echo $row['nombreCompetencia'] ?></option>
                                    <?php

                                    }
                                    ?>    
                    
                     </select>
                Resultado <select name="resultado">
                                 <option value="0">SELECCION : </option>
                                 <?php

                                while($row=mysqli_fetch_array($peticionResultado)){

                                ?>
                                 <option value="<?php echo $row['idResultado'];?>"><?php echo $row['nombreResultado'] ?></option>   
                                    <?php
                                }
                                    ?>
                         </select><br>
                dia <select name="dia">
                                <option value="0">SELECCIONE : </option>
                                <option value="1">Lunes</option>
                                <option value="2">Martes</option>
                                <option value="3">Miercoles</option>
                                <option value="4">Jueves</option>
                                <option value="5">Viernes</option>
                                <option value="6">Sabado</option>
                                <option value="7">Domingo</option>
                    </select>

                Trimestre <input type="text" name="cTrimestre" >
                <br> hora <input type="text" name="hora">
    
                          <br>  <input type="submit" value="Agregar">



    </form>


    </div>

    <div>
    <?php
    $tabla=ConsultaTabla();
    ?> 
    </div>
   
</body>
</html>
<script type="text/javascript">
        $(document).ready(function(){
            recargarListaAmbiente();

            $('#ListaCentro').change(function(){
               recargarListaAmbiente(); 
            });
        })
    </script>
<script type="text/javascript">
    function recargarListaAmbiente(){
        $.ajax({
            type:"POST",
            url:"ambienteSSelection.php",
            data:"centro="+$('#ListaCentro').val(),
            success:function(r){
                $('#lAmbiente').html(r)
            }
        });
    }
</script>
<script type="text/javascript">
        $(document).ready(function(){
            recargarListaPrograma();

            $('#ListaCentro').change(function(){
               recargarListaPrograma(); 
            });
        })
    </script>
<script type="text/javascript">
    function recargarListaPrograma(){
        $.ajax({
            type:"POST",
            url:"selectFuncion.php",
            data:"centrop="+$('#ListaCentro').val(),
            success:function(r){
                $('#lPrograma').html(r)
            }
        });
    }
</script>
<script type="text/javascript">
        $(document).ready(function(){
            recargarListaFicha();

            $('#lPrograma').change(function(){
               recargarListaFicha(); 
            });
        })
    </script>
<script type="text/javascript">
    function recargarListaFicha(){
        $.ajax({
            type:"POST",
            url:"FichaSelection.php",
            data:"programa1="+$('#lPrograma').val(),
            success:function(r){
                $('#lFicha').html(r)
            }
        });
    }
</script>

