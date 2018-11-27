<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Teste</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">
	<style>
		body{
			background-color: #e9e9e9;
		}
		body h1{
			text-align: center;
		}
		.ui.container.tabela{
			margin-top: 100px;
		}
		.ui.divider{
			margin-top: 120px;
			background-color: black;
		}
		.ui.green.header{
			background-color: white;
			width: 500px;
		}
	</style>
</head>
<body>
<?php include 'navbarUser.php'; ?>
	<div class="ui container tabela">
		<div class="ui segment">
			<center><h1 class="ui green header">Gerenciador de participantes</h1></center>
		</div>
		<table class="ui green table">
			<tr>
				<thead>
					<th>Nome</th>
					<th>CPF</th>
					<th>Cargo</th>
					<th>Ações</th>
				</thead>
				<tbody>
					<tr>
						<td>Jhonatas</td>
						<td>1234567891011</td>
						<td>Participante</td>
						<td>
							<div class="ui mini buttons">
								<button class="ui positive button">
									<i class="check icon"></i>Confirmar
								</button>
									<div class="or">
									</div>
								<button class="ui negative button">
									<i class="close icon"></i> Excluir
								</button>
							</div>
						</td>
					</tr>
						<tr>
						<td>Jhonatas</td>
						<td>1234567891011</td>
						<td>Participante</td>
						<td>
							<div class="ui mini buttons">
								<button class="ui positive button">
									<i class="check icon"></i>Confirmar
								</button>
									<div class="or">
									</div>
								<button class="ui negative button">
									<i class="close icon"></i> Excluir
								</button>
							</div>
						</td>
					</tr>
						<tr>
						<td>Jhonatas</td>
						<td>1234567891011</td>
						<td>Participante</td>
						<td>
							<div class="ui mini buttons">
								<button class="ui positive button">
									<i class="check icon"></i>Confirmar
								</button>
									<div class="or">
									</div>
								<button class="ui negative button">
									<i class="close icon"></i> Excluir
								</button>
							</div>
						</td>
					</tr>
				</tbody>
			</tr>		
		</table>
	</div>	
</div>
<?php include 'footer.php'; ?>
</body>
</html>