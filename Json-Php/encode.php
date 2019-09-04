<!DOCTYPE>
<html>

	<head>
		<meta charset="utf-8">
	</head>
	
	<body>
	<h1>Tutorial JSON</h1>
	
	<div id="contenedor"></div>
	
	
	<?php
	
				$varios = array ( "nombre"     => "Luis Alberto",
						"id"         => 120,
						"profesor"   => true,
						"idCursos"   => array(53,765,675),
						"cursos"     => array (
										"marketing"		=> "Mi primera App Movil",  
										"programacion"  => array(
										  
											"Java",
											"HTML5",
											"KOTILIN"
											
										)),
						
						"vacaciones" => null
						
						);
	
						
				echo json_encode($varios);	
	
	
	
	?>

	</body>
	
</html>