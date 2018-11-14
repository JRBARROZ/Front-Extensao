<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Preview</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">
	<style>
	body{
		background-color: #e9e9e9;
	}
	.column{
		max-width: 400px;
		margin: 50px auto auto auto;
	}
</style>
</head>
<body>
	<?php include "navbarUser.php" ?>
	<br><br>
	<div class="column">
		<div class="ui green segment">
			<img class="ui centered large rounded image" src="_imagem/_eventos/entec.png">
			<center><h3 class="ui header"><br>Entec  2018</h3></center>
			<center><h5 class="ui disabled header">Evento Entec que foi promovido em 2018..</h5></center>
			<div class="ui divider"></div>
			<a href="editarEventos.php">
				<center>
					<button class="ui green inverted button">
						<i class="edit icon"></i>Editar Evento
					</button>
				</center>
			</a>
		</div>
		<div class="ui message">
			<a href="adicionarEventos.php"><div class="ui fluid large  green submit button">Confirmar</div></a>
		</div>
	</div>
</body>
</html>