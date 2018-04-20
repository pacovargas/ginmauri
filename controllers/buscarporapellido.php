<?php
error_reporting(E_ALL);
include("../classes/PacienteClass.php");

$paciente = Paciente::buscarPorApellido($_GET["apellidos"]);

echo json_encode($paciente);