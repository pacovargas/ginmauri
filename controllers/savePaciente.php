<?php
include("../classes/PacienteClass.php");

$paciente = new Paciente($_GET["id"]);
$paciente->apellidos = $_GET["apellidos"];
$paciente->nombre = $_GET["nombre"];
$paciente->num_historia = $_GET["numero_historia"];
$paciente->fecha = $_GET["fecha"];
$paciente->tipo_enferma = $_GET["tipo_enferma"];
$paciente->edad = $_GET["edad"];
$paciente->estado_civil = $_GET["estado_civil"];
$paciente->ocupacion = $_GET["ocupacion"];
$paciente->direccion = $_GET["direccion"];
$paciente->ciudad = $_GET["ciudad"];
$paciente->ciudad = $_GET["ciudad"];
$paciente->telefono = $_GET["telefono"];
$paciente->nif = $_GET["nif"];
$paciente->rh = $_GET["rh"];
$paciente->antecedentes_familiares = $_GET["antecedentes_familiares"];
$paciente->antecedentes_personales = $_GET["antecedentes_personales"];
$paciente->historia = $_GET["historia_clinica"];
$paciente->menarquia = $_GET["menarquia"];
$paciente->tm = $_GET["tm"];
$paciente->fur = $_GET["fur"];
$paciente->edad_sexual = $_GET["edad_sexual"];
$paciente->cantidad = $_GET["cantidad"];
$paciente->dolor = $_GET["dolor"];
$paciente->dispareunia = $_GET["dispareunia"];
$paciente->coitorragias = $_GET["coitorragias"];
$paciente->anticonceptivos = $_GET["anticonceptivos"];
$paciente->ano1 = $_GET["ano1"];
$paciente->ano2 = $_GET["ano2"];
$paciente->ano3 = $_GET["ano3"];
$paciente->ano4 = $_GET["ano4"];
$paciente->ano5 = $_GET["ano5"];
$paciente->ano6 = $_GET["ano6"];
$paciente->embarazo1 = $_GET["embarazo1"];
$paciente->embarazo2 = $_GET["embarazo2"];
$paciente->embarazo3 = $_GET["embarazo3"];
$paciente->embarazo4 = $_GET["embarazo4"];
$paciente->embarazo5 = $_GET["embarazo5"];
$paciente->embarazo6 = $_GET["embarazo6"];
$paciente->parto1 = $_GET["parto1"];
$paciente->parto2 = $_GET["parto2"];
$paciente->parto3 = $_GET["parto3"];
$paciente->parto4 = $_GET["parto4"];
$paciente->parto5 = $_GET["parto5"];
$paciente->parto6 = $_GET["parto6"];
$paciente->peso1 = $_GET["peso1"];
$paciente->peso2 = $_GET["peso2"];
$paciente->peso3 = $_GET["peso3"];
$paciente->peso4 = $_GET["peso4"];
$paciente->peso5 = $_GET["peso5"];
$paciente->peso6 = $_GET["peso6"];
$paciente->sexo1 = $_GET["sexo1"];
$paciente->sexo2 = $_GET["sexo2"];
$paciente->sexo3 = $_GET["sexo3"];
$paciente->sexo4 = $_GET["sexo4"];
$paciente->sexo5 = $_GET["sexo5"];
$paciente->sexo6 = $_GET["sexo6"];


$ret = array();
$ret["success"] = $paciente->guardar();
echo json_encode($ret);