<?php

require('Conexion.php');

$con = new Conexion();

$usuarios = $con->getUsers();

require('V_verUsuarios.php');

?>