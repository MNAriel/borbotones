<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Template</title>
	<link href="views/modules/css/style.css" rel="stylesheet">
	<link href="views/modules/css/inicio.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	

	
</head>
<body>
	<div class="hero-image">
		<div class="hero-text">
			<h1 class="tittle Simpsonfont">Los Borbotones</h1>
			<h3 class="subtittle">Materia Simulacion de Sistemas</h3>
		</div>
	</div>
<?php 
	include "modules/navegacion.php";
?>

<section>

<?php

$mvc = new MvcController();
$mvc -> enlacesPaginasController();

?>
	
</section>
<!-- <footer class="container-fluid text-center">
    <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
</footer> -->
</body>
</html>