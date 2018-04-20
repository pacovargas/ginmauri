<?php
include("../classes/PacienteClass.php");

$ret = Paciente::eliminar($_GET["id"]);
echo json_encode($ret);