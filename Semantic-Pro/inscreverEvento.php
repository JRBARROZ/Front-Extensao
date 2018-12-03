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
<?php include "NavbarUser.php" ?>
	<div class="ui container"  style="margin-top: 100px;display: flex;justify-content: center;" >
		<div class="ui link cards">
			<?php for ($i=0; $i < 1; $i++): ?>
				<div class="card" style="padding: 3px;">
						<a class="ui green ribbon label" style="position:absolute;z-index: 10; margin-left: 13px;margin-top: 10px;">10:20 Ás 10:30</a>
					<div class="image">
						<img src="../_imagem/_eventos/vikings.jpg">
					</div>
					<div class="content" style="text-align: center;">
						<div class="header">Matt Giampietro</div>
						<div class="description">
						Matthew is an interior designer living in New York.
						</div>
					</div>
					<div class="extra content">
						<button class="ui green fluid button"><i class="check icon"></i> Confirmar presença</button>
					</div>
				</div>
			<?php endfor; ?>
		</div>
	</div>
<?php include 'footer.php'; ?>	

</div>
</body>
</html>