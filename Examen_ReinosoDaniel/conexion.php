<?php
    //Conexion con la base de datos
    $host = 'localhost';
    $user = 'root';
    $password ='';
    $db = 'examen';

    //parametro de conexion
    $connection = @mysqli_connect($host,$user,$password,$db);

    if ( !$connection) {
        print "Error en la conexion";
    }
    // else {
    //     print "Conexion exitos";
    // }
?>