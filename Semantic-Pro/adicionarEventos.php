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
	<?php $images = ['../_imagem/_eventos/entec.png', '../_imagem/_eventos/ifex.jpg', '../_imagem/_eventos/ifex.jpg', '../_imagem/_eventos/ifex.jpg']; 

$datas = ['10:20 Ás 13:50 19/12/2018', '13:20 Ás 15:50 23/12/2018', '14:20 Ás 16:30 28/12/2018', '15:20 Ás 16:30 30/12/2018', '18:20 Ás 20:30 01/01/2019'];
	shuffle($datas);

	?>

	<!-- Incluindo Navbar -->
	<?php include "NavbarUser.php"; ?>
		<div class="ui container" style="margin-top: 100px;padding: 0px 0px 0px 110px;">
			<div class="ui link cards">
				<!-- Imprimindo exemplos de cards para estudo -->
				<?php for ($i=0; $i < 4; $i++): ?>
					<a href="opa.php">
					<div class="card" style="padding: 3px;">
						<!-- tag de imagem dos cards -->
							<a class="ui green ribbon label" style="position:absolute;z-index: 10; margin-left: 13px;margin-top: 10px;"><?php echo $datas[$i];?></a>
						<div class="ui image">
							<img src=<?php echo "$images[$i]"; ?>>
						</div>
						<!-- conteudo dos cards -->
						<div class="content" style="text-align: center;">
							<div class="header"><?php switch ($i) {
								case '0':
									echo "Entec 2017";
									break;
								
								default:
									echo "Evento IFPE 2018";
									break;
							} ?></div>
							<div class="description">Lorem ipsum dolor inpsum dot fla rog fus ro dah dovaki.</div>
						</div>
						<div class="ui equal width grid">
					<div class="two wide row">
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