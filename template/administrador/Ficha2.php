<html>
    <head>
       <title>Ficha</title>
    </head> 
    <body>
    <center><header><h1>FICHA</h1></header></center>
    <a href="Ficha.php"> <button>Añadir</button></a>

    
        <br>
        <center>
        <?php
            include("conexion.php");
            $Conectar=Conectar();
            $Consulta=ConsultarFichaT();
          
        ?>
       </center> 
    </body>
</html>