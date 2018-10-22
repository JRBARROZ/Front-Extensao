<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">
	<link rel="shortcut icon" href="_imagem/_icone/ifpe.png">
	<title>Portal de Eventos - IFPE</title>
	<style>
		body{
			background-color: #000;
		}
	</style>
</head>
<body>
	<?php include "navbarUser.php"; ?>
	<div class="ui container">
		<!-- Parte da seleção de eventos -->
		<div class="ui three column grid">
			<div class="column">
				<div class="ui segment">
					<center>
						<a href="cadastrarEvento.php">
							<button class="ui basic medium button">
								<h1 class="ui green header">Novo Evento<br>
									<center><i class="plus large icon"></i></center>
								</h1>
							</button>
						</a>
					</center>	
				</div>
			</div>
			<div class="column">
				<div class="ui green segment">
					<a class="ui green ribbon label">21/04/2018 - 17:00 Ás 20:00</a><br></br>
					<img class="ui centered large rounded image" src="_imagem/_eventos/vikings.jpg">
					<center><h3 class="ui header"><br>Vikings 2018</h3></center>
					<center><h5 class="ui disabled header">Evento Vikings que foi promovido em 2018..</h5></center>
					<div class="ui divider"></div>
					<a href="editarEventos.php">
						<button class="ui green inverted button">
							<i class="edit icon"></i>Editar Evento
						</button>
					</a>
					<a href="detalhesEventos.php">
						<button class="ui green  button">
							<i class="calendar icon"></i>Consultar Evento
						</button>
					</a>
				</div>
			</div>
			<div class="column">
				<div class="ui green segment">
					<a class="ui green ribbon label">21/04/2018 - 17:00 Ás 20:00</a><br></br>
					<img class="ui centered large rounded image" src="_imagem/_eventos/vikings.jpg">
					<center><h3 class="ui header"><br>Vikings 2018</h3></center>
					<center><h5 class="ui disabled header">Evento Vikings que foi promovido em 2018..</h5></center>
					<div class="ui divider"></div>
					<a href="editarEventos.php">
						<button class="ui green inverted button">
							<i class="edit icon"></i>Editar Evento
						</button>
					</a>
					<a href="detalhesEventos.php">
						<button class="ui green  button">
							<i class="calendar icon"></i>Consultar Evento
						</button>
					</a>
				</div>
			</div>	
		</div>
	</div>
</body>
</html>