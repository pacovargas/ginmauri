<?php
include("../classes/PacienteClass.php");

$pacientes = Paciente::getPacientes();
// echo "<pre>";
// print_r($pacientes);
// echo "</pre>";
echo json_encode($pacientes);