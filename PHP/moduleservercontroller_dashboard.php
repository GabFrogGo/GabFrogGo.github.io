<?php
require '../../PHP/conexiondb_test.php';
session_start();
if(!isset($_SESSION['usuario']) || !$_SESSION['usuario']) {
    header("Location: ../../HTML/tools/login.php");
}

$userreq = "Bienvenid@ - ".$_SESSION['usuario'];
$iduserreq = $_SESSION["id_usuario"];
?>
