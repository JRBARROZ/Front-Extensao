<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Login Eventos - IFPE</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">
	<link rel="shortcut icon" href="_imagem/_icone/ifpe.png">
	<style>
	body {
		background-color: #000;
		overflow: hidden;

	}
	.column {
		max-width: 450px;
		margin: 50px auto auto auto;
	}
	.content{
		color: #4ee44e;
	}	
</style>
</head>
<body>
	<?php include "navbar.php"; ?>
	<div class="column">
		<div class="ui message">
			<h2 class="ui teal image header">
				<img src="_imagem/_icone/ifpe.png" class="ui hurger image">
				<div class="content">
					 Acesse agora, Eventos - IFPE
				</div>
			</h2>
		</div>
		<form class="ui form">
			<div class="ui stacked large green segment">
				<div class="field">
					<div class="ui left icon input">
						<i class="user green icon"></i>
						<input type="text" name="email" placeholder="Seu email">
					</div>
				</div>
				<div class="field">
					<div class="ui left icon input">
						<i class="lock green icon"></i>
						<input type="password" name="password" placeholder="Senha">
					</div>
				</div>
				<a href="adicionarEventos.php"><div class="ui fluid large inverted green submit button">Login</div></a>
			</div>
		</form>  
		<div class="ui message">
     		<center>Não tem uma conta? <a href="cadastro.php" style="color: green;">  Cadastre-se</a></center>
    	</div>	
	</div>
</body>
</html>