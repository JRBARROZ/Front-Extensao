<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
	<link rel="shortcut icon" href="./../_imagem/_icone/ifpe.png">
	<link rel="stylesheet" href="./../css/evento.css">
	<title>Portal de Eventos - IFPE</title>
	<style>
	 	*{margin:0;padding: 0;}
		body{background-color: #ccc;}
	</style>
</head>
<body>
	<?php include 'Navbar.php'; ?>
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
				<center><span><h1>Palestrantes do evento</h1></span></center>
				<div class="ui list">
					<center>
  <div class="item">
    <img class="ui avatar tiny image" src="./../_imagem/_eventos/vikings.jpg">
    <div class="content">
      <h2>Jennifer Müller</h2>
      <div class="description">Palestrante sobre o assunto XXXXX<b></div>
      	<div class="ui divider"></div>
    </div>
  </div>
  <div class="item">
    <img class="ui avatar tiny image" src="./../_imagem/_eventos/vikings.jpg">
    <div class="content">
      <h2>Michell Otta</h2>
      <div class="description">Palestrante sobre o assunto XXXXX<b></div>
      	
    </div>
  </div>
  </center>
</div>
			</div>
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
	</div>	
		<?php include 'footer.php'; ?>
	</body>
</html>
