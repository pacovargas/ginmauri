<?php
include("../classes/PacienteClass.php");

$indices = Paciente::getIndices();
echo json_encode($indices);