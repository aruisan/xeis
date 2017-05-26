<?php
require_once('php/conexion.php');

header("Content-Type: application/pdf");
$pdf = $_GET['pdf'];

$sql = "SELECT * FROM documento WHERE id_documento = $pdf ";
$archivo = $conexion->query($sql); 
$dato = $archivo->fetch_object();

echo $dato->archivo;



?>