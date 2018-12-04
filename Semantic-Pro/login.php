<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Login Eventos - IFPE</title>
	<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
	<link rel="shortcut icon" href="_imagem/_icone/ifpe.png">
	<style>
	body {
		background-color: #ccc;
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
	<?php require_once "Navbar.php"; ?>
	<br><br><br>
	<div class="column">
		<div class="ui green segment">
			<h2 class="ui teal image header">
				<img src="./../_imagem/_icone/ifpe.png" class="ui hurger image">
				<div class="content">
					<span style="color:darkgreen">Acesse agora, Eventos - IFPE</span>
				</div>
			</h2>
		</div>
		<form class="ui form">
			<div class="ui large segment">
				<div class="field"><label>Email</label>
					<div class="ui left icon input">
						<i class="user green icon"></i>
						<input type="text" name="email" placeholder="Seu email">
					</div>
				</div>
				<div class="field"><label>Senha</label>
					<div class="ui left icon input">
						<i class="lock green icon"></i>
						<input type="password" name="password" placeholder="Senha">
					</div>
				</div>
				<a href="adicionarEventos.php"><div class="ui fluid large green submit button">Login</div></a>
			</div>
		</form>  
		<div class="ui segment">
     		<center>Não tem uma conta?   <a href="cadastro.php" style="color: darkgreen;"> Cadastre-se</a></center>
    	</div>	
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>