<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
	<link rel="shortcut icon" href="../	_imagem/_icone/ifpe.png">
	<title>Portal de Eventos - IFPE</title>
	<style>
	 	*{margin:0;padding: 0;}
		body{background-color: #ccc;}
	</style>
</head>
<body>
	<!-- Incluindo Navbar -->
	<?php include "NavbarUser.php"; ?>
		<div class="ui container" style="margin-top: 100px;padding: 0px 0px 0px 110px;">
			<div class="ui link cards">
				<!-- Imprimindo exemplos de cards para estudo -->
				<?php for ($i=0; $i < 6; $i++): ?>
					<a href="opa.php">
					<div class="card" style="padding: 3px;">
						<!-- tag de imagem dos cards -->
							<a class="ui green ribbon label" style="position:absolute;z-index: 10; margin-left: 13px;margin-top: 10px;">10:20 Ás 10:30</a>
						<div class="ui image">
							<img src="../_imagem/_eventos/vikings.jpg">
						</div>
						<!-- conteudo dos cards -->
						<div class="content" style="text-align: center;">
							<div class="header">Matt Giampietro</div>
							<div class="description">Matthew is an interior designer living in New York.</div>
						</div>
						<div class="ui equal width grid">
					<div class="thwo wide row">
						<div class="column"><a href="editarEventos.php"><div class="ui green fluid button"><i class="edit icon"></i>Editar</div></a></div>	
						<div class="column"><a href="detalhesEventosUser.php"><div class="ui green fluid button"><i class="calendar icon"></i>Detalhes</div></a></div>		
					</div>
				</div>
					</div>

				<?php endfor; ?>
			</div>
		</div>
		<!-- Incluindo Footer -->
	<?php include "footer.php"; ?>
</body>
</html>