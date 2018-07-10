<!DOCTYPE html>
<html lang="es">

<head>
    <title>GinMauri</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Francisco Javier Vargas Estrada">
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>

    <link rel="stylesheet" href="bootstrap-4.1.0-dist/css/bootstrap.min.css">
    <script src="bootstrap-4.1.0-dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/ginmauri.css">
</head>
<body class="restore">
	<div class="container-fluid cabecera">
		<div class="row">
			<div class="col-sm-12 text-center">GIN MAURI V2.0</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
<?php
include("config/defines.php");

function restoreMysqlDB($filePath, $conn)
{
    $sql = '';
    $error = '';
    
    if (file_exists($filePath)) {
        $lines = file($filePath);
        
        foreach ($lines as $line) {
            
            // Ignoring comments from the SQL script
            if (substr($line, 0, 2) == '--' || $line == '') {
                continue;
            }
            
            $sql .= $line;
            
            if (substr(trim($line), - 1, 1) == ';') {
                $result = mysqli_query($conn, $sql);
                if (! $result) {
                    $error .= mysqli_error($conn) . "\n";
                }
                $sql = '';
            }
        } // end foreach
        
        if ($error) {
            $response = array(
                "type" => "error",
                "message" => $error
            );
        } else {
            $response = array(
                "type" => "success",
                "message" => "Database Restore Completed Successfully."
            );
        }
    } // end if file exists
    return $response;
}


$conn = mysqli_connect(_DB_SERVER_, _DB_USER_, _DB_PASSWD_, _DB_NAME_);
$res = restoreMysqlDB($_FILES["archivo"]["tmp_name"], $conn);

if($res["type"] == "success"){
	echo "<p>Base de datos restaurada correctamente</p>";
}
else{
	echo "<p>Fallo restaurando la base de datos</p>";
	echo "<p>Mensaje de error: " . $res["message"] . "</p>";
}

echo "<p><a href='index.html'>Volver</a></p>";

?>
</div>
</div>
</div>
</body>
</html>