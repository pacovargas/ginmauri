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
			<div class="col-sm-6">
				<form action="restore2.php" method="POST" enctype="multipart/form-data" />
					<input type="file" name="archivo" id="archivo" />
					<input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="30M" />
					<br />
					<input type="submit" name="restaurar" value="restaurar" />
				</form>
			</div>
			<div class="col-sm-6 text-right">
				<a href="index.html">Volver</a>
			</div>
		</div>
	</div>
</body>
</html>