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
			margin-top: 50px;
		}
		.ui.divider{
			margin-top: 120px;
			background-color: black;
		}
		.ui.green.header{
			background-color: white;
			width: 500px;
		}
		html,
		body {
		   margin:0;
		   padding:0;
		   height:100%;
		}
		#container {
		   min-height:100%;
		   position:relative;
		}
		#header {
		   /*background:#ff0;*/
		   padding:10px;
		}
		#body {
		   padding:10px;
		   padding-bottom:60px;   /* Height of the footer */
		}
		#footer {
		   position:absolute;
		   bottom:0;
		   width:100%;
		   height:60px;   /* Height of the footer */
		   /*background:#6cf;*/
		}
	</style>
</head>
<body>
	<div id="container">
		<?php include 'navbarUser.php'; ?>
		<div id="body">
			<div class="ui container tabela">
				<div class="ui green segment">
					<center><h1 class="ui green header">Gerenciador de participantes</h1></center>
				</div>
				<table class="ui table" style="width: 100%;">
					<tr>
						<thead>
							<th>Nome</th>
							<th>CPF</th>
							<th>Cargo</th>
							<th>Ações</th>
						</thead>
						<tbody>	
								<tr>
								<td>xxxxx</td>
								<td>xxxxx</td>
								<td>xxxxx</td>
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
	</div>
</body>
</html>