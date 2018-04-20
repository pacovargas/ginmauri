<?php
include("../classes/PacienteClass.php");

$ret = Paciente::nuevo();
echo json_encode($ret);