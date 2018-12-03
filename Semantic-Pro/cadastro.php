<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro Eventos - IFPE</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">
	<link rel="shortcut icon" href="_imagem/_icone/ifpe.png">
	<style>
		body{
			background-color: #ccc;
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
	<?php include "Navbar.php"; ?>
	<br><br><br>
	<div class="column">
		<div class="ui green segment">
			<h2 class="ui teal image header">
				<img src="./../_imagem/_icone/ifpe.png" class="ui hurger image">
				<div class="content">
					 <span style="color: darkgreen;">Cadastre-se agora, Eventos - IFPE</span>
				</div>
			</h2>
		</div>
		<div class="ui segment">
			<form action="" class="ui form">
				<div class="two fields">
					<div class="field">
					<label for="">Nome*</label>
					<div class="ui left icon input">
						<i class="user green icon"></i>
						<input type="text" placeholder="Nome">
					</div>
					</div>
				<div class="field">
					<label for="">CPF*</label>
					<div class="ui left icon input">
						<i class="key green icon"></i>
						<input type="text" placeholder="CPF">
					</div>
				</div>
				</div>
				<div class="two fields">
					<div class="field">	
						<label for="">Email*</label>
						<div class="ui left icon input">
							<i class="envelope green icon"></i>
							<input type="text" placeholder="Email">
						</div>
					</div>
					<div class="field">
						<label for="">Telefone*</label>
						<div class="ui left icon input">
							<i class="phone  green icon"></i>
							<input type="text" placeholder="Telefone">
						</div>
					</div>
				</div>
				<div class="two fields">
					<div class="field">	
						<label for="">Senha*</label>
						<div class="ui left icon input">
							<i class="lock green icon"></i>
							<input type="text" placeholder="Senha">
						</div>
					</div>
					<div class="field">
						<label for="">Repita a Senha*</label>
						<div class="ui left icon input">
							<i class="lock green icon"></i>
							<input type="text" placeholder="Repita a senha">
						</div>
					</div>
				</div>
				<a href="login.php"><div class="ui fluid large green submit button">Cadastrar</div></a>
			</form>
		</div>
		<div class="ui segment">
     		<center>Já tem uma conta? <a href="login.php" style="color: #4ee44e;">Faça o login</a></center>
    	</div>	
	</div>
	<?php include 'footer.php' ?>
</body>
</html>