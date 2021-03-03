<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Componentes</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="/css/componentes.css">
	<link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">
</head>

<body>
	<?php 
		include "componentes/header.php";
		include "componentes/quienes-somos.php";
		include "componentes/clientes.php";
		include "componentes/servicios.php";
		include "componentes/marcas.php";
		include "componentes/galeria.php";
	?>
	
	<?php include "componentes/contacto.php" ?>


	<!-- Jquery-2.2.4 js -->
	<script src="/js/jquery/jquery.min.js"></script>
	<!-- Popper js -->
	<script src="/js/bootstrap/popper.min.js"></script>
	<!-- Bootstrap-4 js -->
	<script src="/js/bootstrap/bootstrap.min.js"></script>
	<!-- All Plugins js -->
	<script src="/js/others/plugins.js"></script>
	<!-- Active JS -->
	<script src="/js/active.js"></script>
</body>

</html>
