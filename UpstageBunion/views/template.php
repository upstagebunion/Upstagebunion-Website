<!DOCTYPE html>

<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title> UpstageBunion </title>
	<link href="estilos/estilos.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>

<body>
	
	<div class="contenedor active" id="contenedor">
		
		<?php include "modules/header.php"; ?>	

		<?php include "modules/nav.php"; ?>

		<?php	
			
			$contenido = new UBcontroller();
			$contenido -> controladorContenido();
			
		?>

	</div>

	<script src="https://kit.fontawesome.com/4d06835232.js" crossorigin="anonymous"></script>
	<script src="jscript/jscript.js"></script>
</body>

</html>