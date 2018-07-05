<?php
error_reporting(E_ALL);
// include("../classes/PacienteClass.php");
include("../classes/BackupMySQL.php");

$backup = new BackupMySQL([
    'host'=> "localhost",
    'database'=> "ginmauri",
    'user'=> "root",
    'password'=> "pystemsause",
]);
$backup->download();