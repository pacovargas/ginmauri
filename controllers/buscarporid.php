<?php
error_reporting(E_ALL);
include("../classes/PacienteClass.php");

$paciente = new Paciente($_GET["id"]);
echo json_encode($paciente);