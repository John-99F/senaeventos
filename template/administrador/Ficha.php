
<html>
    <head>

    </head>
,<body>
    <center>
        <header>

             <h1>FICHA</h1>

         </header>
    </center>
        <div>
           <center> <form action="" method="POST">
                    Id Ficha: <br><input type="number" name="IdFicha" size="40"><br>
                    Numero Ficha : <br><input type="text" name="NumeroFicha" size="38"><br>
                    Numero de Aprendices : <br><input type="text" name="NAprendices" size="30"><br>
                    Id Programa : <br><input type="text" name="IdPrograma" size="39"><br>
                    Jornada : <br><input type="text" name="jornada"><br>
                    Trimestre : <br><input type="text" name="trimeste"><br>
                    Fecha Inicio : <br><input type="date" name="FechaInicio" ><br>
                    Fecha Final :<br><input type="date" name="FechaFinal"><br>
                   
                   <br><input type="submit" value="Guardar">
                    </form>     
                       <a href="Ficha2.php"><button>Volver</button></a>   
                   
            </center>
        </div>
        <?php
               include("conexion.php");
                $Conectar=Conectar();
                $Insertar=InsertarFicha();
        ?>
          
    </body>
</html>