<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">
	<link rel="shortcut icon" href="_imagem/_icone/ifpe.png">
	<title>Portal de Eventos - IFPE</title>
	<style>
	*{
		margin: 0;
		padding: 0;
	}
	.ui.container{
		margin-top: 80px;
		padding: 0px 0px 0px 80px;

	}
	.ui.ribbon.label{
		z-index: 100;
	}
	.ui.link.cards{
		margin: 1px;
		text-align: center;
	}
	</style>
</head>
<body>
<?php include "navbar.php"; ?>
<div class="ui container">
	<?php for ($i=0; $i < 6; $i++):?>
<div style="float: left;">
<a href="detalhesEventos.php">
	<div class="ui link cards">
		<div class="green card" style="">
			<div class="ui fluid image">
				<label class="ui green ribbon label">20:00 Ás 10:00</label>		
				<div class="image">
					<img src="_imagem/_eventos/B.jpg" class="ui massive image">
				</div>
			</div>
			<div class="content">
				<div class="header"><center>(Nome Evento)</center></div>
					<div class="description ">
						<center>
							<h5>
								Evento XXX Com o objetivo de XXXX ...
							</h5>
						</center>	
					</div>
					<div class="ui divider"></div>
					<div class="extra-content">
						<button class="ui green fluid button"><i class="calendar icon"></i> Consulstar evento</button>
					</div>
			</div>
		</div>
	</div>
</a>
</div>
	<?php endfor;?>
</div>
<?php include 'footer.php'; ?>
</body>

</html>