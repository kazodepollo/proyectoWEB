<!DOCTYPE html>
<html lang="es">
<head>
    <title>Recibiendo datos del registro</title>
    <meta charset="UTF-8">
    <?php
     
    function writeFILE($datos){
      $file = "respuestaFormulario.txt";
      $fp = fopen($file, "a");
      fwrite($fp, $datos);
      fclose($fp);
    } 
    function printAnios(){
        $aniog = $_POST['anio'];
        echo "<p>Año de graduación: $aniog</p>";
        writeFILE("\n\t\tAño de graduación: ");
        writeFILE($aniog);
        writeFILE("\n");
      }
  
    function printPosicion(){
      $Posicion = $_POST['Posicion'];
      echo "<p>Posición de la aplicación: </p>"; 
      writeFILE("\t\tPosición de la aplicación: ");
        foreach($_POST['Posicion'] as $Posicion){
            print "&emsp;$Posicion <br>";
            writeFILE($Posicion);
            writeFILE(", ");
          }
      }      
    ?>
</head>
<body>
        <h1>Receptor de registro de aplicaciones</h1>

        <?php
        echo "<h2>Información del registro:</h2>";
        writeFILE("\nNueva Solicitud- \n");

        printPosicion();
        printAnios();

        $nombreUsuario = $_POST['nombreUsuario'];
        echo "<p>Nombre Completo: $nombreUsuario</p>";
        writeFILE("\n\t\tNombre Completo: ");
        writeFILE($nombreUsuario);
        
        $correo = $_POST['correo'];
        echo "<p>Correo electronico: $correo</p>";
        writeFILE("\n\t\tCorreo electronico: ");
        writeFILE($correo);
        
        $FechaNacimiento = $_POST['FechaNacimiento'];
        echo "<p>Fecha de Nacimiento: $FechaNacimiento</p>";
        writeFILE("\n\t\tFecha de Nacimiento: ");
        writeFILE($FechaNacimiento);

        $edad = $_POST['edad'];
        echo "<p>Edad: $edad</p>";
        writeFILE("\n\t\tEdad: ");
        writeFILE($edad);

        $sexo = $_POST['sexo'];
        echo "<p>Género: $sexo</p>";
        writeFILE("\n\t\tGénero: ");
        writeFILE($sexo);

        echo "<p>Fechas disponibles para la entrevista: </p>";
        writeFILE("\n\t\tFechas disponibles: ");
        $PriFechaDis = $_POST['PriFechaDis'];
        echo "<p>&emsp;$PriFechaDis</p>";        
        writeFILE("\n\t\t\t$PriFechaDis");        
        $SegFechaDis = $_POST['SegFechaDis'];
        echo "<p>&emsp;$SegFechaDis</p>";        
        writeFILE("\n\t\t\t$SegFechaDis");
        writeFILE("\n");


        ?>
</body>

</html>