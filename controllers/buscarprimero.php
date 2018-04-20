<?php
include("../classes/PacienteClass.php");

$paciente = Paciente::getPrimero();

echo json_encode($paciente);