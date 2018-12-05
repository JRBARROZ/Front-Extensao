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
				<h1 class="span">Entec 2017</h1>
				<h2 class="opacity">21/05/2017 a/e 22/05/2017</h2>
				<h2 class="opacity">Campus Igarassu - IFPE </h2>
				<h2 class="opacity">Igarassu - PE -</h2>
			</div>
	</div>
	<div class="ui container">
		<div class="position">
			<div class="ui segment">
				<center><span><h1>Palestrantes do evento</h1></span></center>
				<div class="ui list">
					<center>
						<div class="item">
							<img class="ui avatar tiny image" src="./../_imagem/_eventos/avatar.jpg">
							<div class="content">
								<h2>Daenerys Targaryen</h2>
								<div class="description">Palestrante sobre o assunto javascript.<b></div>
								<div class="ui divider"></div>
							</div>
						</div>
						<div class="item">
							<img class="ui avatar tiny image" src="./../_imagem/_eventos/avatar2.jpg">
							<div class="content">
								<h2>Ragnar Lothbrok</h2>
								<div class="description">Palestrante sobre websites.</div>
						
							</div>
						</div>
					</center>
</div>
			</div>
						<div class="ui segment">
				<center><span><h1>Programação do evento</h1></span></center>
				<!-- <div class="ui green divider"></div> -->
				<table class="ui single line table">  
					<thead>
						<tr>
							<th>Palestra</th>
							<th>Palestrante</th>
							<th>Email</th>
							<th>Horário</th>
							<th class="right aligned">Status</th>
						
						</tr>
					</thead>
					<tbody>
						
							<tr>
								<td>Construindo websites</td>
								<td>Ragnar Lothbrok</td>
								<td>Ragnar@kattegat.com</td>
								<td>4:00 ás 5:00</td>
								<td class="right aligned">Confirmado</td>
								<tr>
									<td>O que é js?</td>
									<td>Daenerys Targaryen</td>
									<td>Daenarys@dracarys.com</td>
									<td>5:30 ás 6:30</td>
									<td class="right aligned">Não Confirmado</td>
									
									</tr>
								</tbody>
							</table>
						</div>
			<div class="ui segment">
				<center><span><h1>Descrição do evento</h1></span></center>
				<div class="ui green divider"></div>
				<div class="justify">
					<div class="ui header"><h1>Entec 2017</h1></div>
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
