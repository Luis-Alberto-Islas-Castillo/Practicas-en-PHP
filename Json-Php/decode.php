<!DOCTYPE>
<html>

	<head>
		<meta charset="utf-8">
	</head>
	
	<body>
	<h1>JSON</h1>
	
	<div id="contenedor"></div>
	
	<?php
	$varios = '{
			"nombre": "Alberto",
			"id":250,
			"profesor":true,
			"idCursos":[53,765,675],
			"cursos": {
				"marketing":"Mi primera pagina web",
				"programacion": [
					"Angular",
					"Python",
					"php"		
				]
			},
			"vacaciones":null
		}';
	print_r(json_decode($varios, true));
	?>
	</body>
</html>