<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">
	<link rel="shortcut icon" href="_imagem/_icone/ifpe.png">
	<link rel="stylesheet" href="css/evento.css">
	<title>Portal de Eventos - IFPE</title>
</head>
<body>
	<?php include 'navbar.php'; ?>
	<div class="ui vertical masthead center aligned segment">
			<br><br><br><br><br>
			<div class="div3">	
				<h1 class="span">(Titulo Evento)</h1>
				<h2 class="opacity">00/00/0000 a/e 00/00/0000</h2>
				<h2 class="opacity">Campus XXXXX - IFPE </h2>
				<h2 class="opacity">(Cidade)</h2>
			</div>
	</div>
	<div class="ui container">
		<div class="position">
			<div class="ui segment">
				<center><span><h1>Programação do evento</h1></span></center>
				<!-- <div class="ui green divider"></div> -->
				<table class="ui green table">
					<thead>
						<tr>
							<th>Palestra</th>
							<th>Palestrante</th>
							<th>Horário</th>
							<th class="right aligned">Status</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>XXXXXXXXXXXXXX</td>
							<td>XXXXXX XXXXX</td>
							<td>00-00-00 Ás 00-00-00</td>
							<td class="right aligned">Confirmada</td>
						</tr>
						<tr>
							<td>XXXXXXXXXXXXXX</td>
							<td>XXXXXX XXXXX</td>
							<td>00-00-00 Ás 00-00-00</td>
							<td class="right aligned">Não Confirmada</td>
						</tr>
					</tbody>
				</table>
				
			</div>
			<div class="ui segment">
				<center><span><h1>Descrição do evento</h1></span></center>
				<div class="ui green divider"></div>
				<div class="justify">
					<div class="ui header"><h1>XXXXXX</h1></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vitae faucibus quam. Donec turpis enim, mollis convallis eleifend vel, viverra sit amet ex. Etiam interdum elit sed vulputate viverra. Nullam commodo tellus purus, sit amet accumsan mauris suscipit feugiat. Nulla facilisi. Fusce varius vitae elit non consectetur. Aenean libero odio, dignissim ut iaculis sed, mattis ultricies nunc. Duis at finibus nibh. Sed tincidunt porta libero, in efficitur ante pulvinar non. Pellentesque fringilla fringilla urna eu posuere. Nulla volutpat pretium turpis ut auctor. Nullam ac finibus dui. Cras consequat varius justo, sagittis dapibus turpis faucibus at. Duis aliquam luctus eros, ut fringilla lorem consequat sed.
					</p>
				</div>
			</div>
			<div class="ui segment">
				<center><span><h1>Inscreva-se</h1></span></center>
				<div class="ui green divider"></div>
				<br>
					<center><a href="inscreverEvento.php"><button class="ui green button">Fazer inscrição</button></a></center>
				<br>
			</div>
		</div>
	</body>

