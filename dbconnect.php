<?php
  // Conexion:
  $conexion_db = mysql_connect("localhost","root","")
    or die ("Conexión denegada, el Servidor de Base de datos que solicitas NO EXISTE");
    $db = mysql_select_db("aspentrucks", $conexion_db)
    or die ("La Base de Datos <b>$basededatos</b> NO EXISTE");

?>
