<?php
  require_once'../../../model/ambiente.php';

?>

<html>
    <head>

    </head>
,<body>
    <center>
        <header>

             <h1>Gestion de ficha</h1>

         </header>
    </center>
        <div>

            <form action="../../../controller/controlIns.php" method="POST">
                   <fieldset>
                     <legend>Create Ficha</legend>
                    Id Ficha:<input required type="number" id="idFicha"
                                    title="Ingrese el Id" name="idFicha">

                    Numero Ficha : <input required type="text" id="numeroFicha" 
                                    title="Ingrese el numero de ficha" name="numeroFicha">

                    Numero de Aprendices : <input required type="text"id="numeroAprendices" 
                                    title="Ingrese el numero de aprendices" name="numeroAprendices"><br>

                    Id Programa : <input  required type="text" id="idPrograma"
                                    title="Ingrese el id" name="IdPrograma">

                    Jornada : <input required type="text" id="jornada" 
                                    title="Ingrese la jornada "name="jornada">

                    Trimestre : <input required type="text" id="trimestre"
                                    title="Ingrese el trimestre" name="trimeste">

                    Fecha Inicio : <input required type="date" id="fechaInicio" 
                                    title="Ingrese la fecha de inicio"name="fechaInicio"><br>

                    Fecha Final :<input required type="date" id="fechaFinal"
                                    title="Ingrese la fecha final" name="FechaFinal">
                   
                   <input  required type="hidden" name="ficha" value="Agregar">
                    <button>Guardar</button>
                </fieldset>
                </form>     
                       <a href="Ficha2.php"><button>Volver</button></a>   
                   
           
        </div>
     
    </body>
</html>