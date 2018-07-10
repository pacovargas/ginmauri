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