<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro Eventos - IFPE</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">
	<link rel="shortcut icon" href="_imagem/_icone/ifpe.png">
	<style>
		body{
			background-color: #000;
		}
		.column{
			max-width: 500px;
			margin:50px auto auto auto;
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
					 Cadastre-se agora, Eventos - IFPE
				</div>
			</h2>
		</div>
		<div class="ui green segment">
			<form action="" class="ui form">
				<div class="field">
					<div class="ui left icon input">
						<i class="user green icon"></i>
						<input type="text" placeholder="Nome">
					</div>
				</div>
				<div class="two fields">
					<div class="field">	
						<div class="ui left icon input">
							<i class="envelope green icon"></i>
							<input type="text" placeholder="Email">
						</div>
					</div>
					<div class="field">
						<div class="ui left icon input">
							<i class="phone  green icon"></i>
							<input type="text" placeholder="Telefone">
						</div>
					</div>
				</div>
				<div class="two fields">
					<div class="field">	
						<div class="ui left icon input">
							<i class="lock green icon"></i>
							<input type="text" placeholder="Senha">
						</div>
					</div>
					<div class="field">
						<div class="ui left icon input">
							<i class="lock green icon"></i>
							<input type="text" placeholder="Repita a senha">
						</div>
					</div>
				</div>
				<a href="login.php"><div class="ui fluid large inverted green submit button">Cadastrar</div></a>
			</form>
		</div>
		<div class="ui message">
     		<center>Já tem uma conta? <a href="login.php" style="color: #4ee44e;">Faça o login</a></center>
    	</div>	
	</div>
</body>
</html>