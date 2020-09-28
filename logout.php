<?php
//iniciar session y mantener session
session_start();
//eliminar elementos de la variable session
//session_unset();
//destruimos la session;
session_destroy();
header('location:index.php');
?>