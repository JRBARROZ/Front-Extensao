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
					<div>
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
			</div>
			<div class="column">
				<div class="ui segment">
					<img class="ui centered large rounded image" src="_imagem/_eventos/entec.png">
					<center><h3 class="ui header"><br>Entec 2017</h3></center>
					<center><h5 class="ui disabled header">Evento Entec que foi promovido em 2017..</h5></center>
					<div class="ui divider"></div>
					<center><h5 class="ui grey header"><i class="edit icon"></i>Editar Evento</h5></center>
				</div>
			</div>
			<div class="column">
				<div class="ui segment">
					<img class="ui centered large rounded image" src="_imagem/_eventos/logmaster.png">
					<center><h3 class="ui header"><br>LogMaster</h3></center>
					<center><h5 class="ui disabled header">Evento LogMaster que foi promovido em 2018..</h5></center>
					<div class="ui divider"></div>
					<center><h5 class="ui grey header"><i class="edit icon"></i>Editar Evento</h5></center>
				</div>
			</div>
		</div>
	</div>
</body>
</html>