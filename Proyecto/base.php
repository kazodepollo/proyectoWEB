<?php


// PHP Data Objects(PDO) Sample Code:
    try {
        $conn = new PDO("sqlsrv:server = tcp:proyectowebfinal.database.windows.net,1433; Database = proyectoWeb_2021", "kazodepollo", "holaMundo123+");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        print("Error connecting to SQL Server.");
        die(print_r($e));
    }

    // SQL Server Extension Sample Code:
    $connectionInfo = array("UID" => "kazodepollo", "pwd" => "holaMundo123+", "Database" => "proyectoWeb_2021", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
    $serverName = "tcp:proyectowebfinal.database.windows.net,1433";
    $conn = sqlsrv_connect($serverName, $connectionInfo);


   /* $server ='localhost';
    $username='root';
    $password='n0m3l0';
    $database='dase';


    try{

      $conn= new PDO("mysql:host=$server; dbname=$database;", $username,$password);
    } catch (PDOExeption $e){

        die('Fallo conexion: ' .$e->getMessage());

    }

   $coneccion= mysqli_connect($server, $username,$password, $database);

    if (!$coneccion){

        die ("Connection failed: " . mysqli_connect_error());

    }
    echo("Conexion realizada");

     */

?>