<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">
	<link rel="shortcut icon" href="_imagem/_icone/ifpe.png">
	<title>Portal de Eventos - IFPE</title>
	<style type="text/css">body{background-color: #e9e9e9;}</style>
</head>
<body >
	<?php include "Navbar.php"; ?>
	<br><br><br><br>
	<div class="ui container">
		<div class="ui green segment">
			<div class="ui vertically divided grid">
				<div class="column">
					<form action="previewEvento.php" class="ui form" id="cadastro" method="post">
						<center>
							<h2 class="ui  header">Cadastro do Evento</h2>
						</center>
						<br>
						<strong><h3 class="ui dividing header">Sobre o evento</h3></strong>
						<div class="field">
							<br><label>Nome*
								<input type="text" name="nome" placeholder="Nome do evento"  >
							</label>
							<div class="field">
								<br><label>Descrição*
									<textarea placeholder="Descrição do Evento" name="descricao" ></textarea>
								</label>
							</div>
							<div class="four fields">
								<div class="field">
									<br><label>Email
										<input type="text" name="email" placeholder="Email para contato"  >
									</label>
								</div>
								<div class="field">
									<br><label>Telefone
										<input type="text" name="telefone" placeholder="Telefone para contato"  >
									</label>
								</div>
								<div class="field">
									<br><label>Vagas*
										<input type="text" name="telefone" placeholder="Telefone para contato"  >
									</label>
								</div>
								<div class="field">
									<br><br><label for="file" class="ui icon green inverted button"><i class="file image icon"></i> Adicionar-Imagem
										<input type="file" name="imagem" placeholder="Telefone para contato"   class="" style="display: none;" id="file">
									</label>
								</div>
							</div>
							<br><strong><h3 class="ui dividing header">Data e hora do evento</h3></strong>
							<div class="five fields">
								<div class="field">
									<br><label>Inicio*
										<input type="date" name="data" placeholder="Data do evento"   >
									</label>
								</div>
								<div class="field">
									<br><label>Hora de Inicio*
										<input type="text" name="horainicio" placeholder="Telefone para contato" value="00:00"  >
									</label>
								</div> 
								<div class="field">
									<input type="hidden" name="">
								</div>
								<div class="field">
									<br><label>Término*
										<input type="date" name="terminio" >
									</label>
								</div>
								<div class="field">
									<br><label>Hora de Finalização*
										<input type="text" name="finish" value="00:00" >
									</label>
								</div>
							</div>
							<br><strong><h3 class="ui dividing header">Endereço do evento</h3></strong>
							<div class="field">
								<br><label>Campus do evento*</label>
								<select name="campus" class="ui fluid dropdown" value="Escolha um campus"   >
									<option value=""></option>
									<option value="AL">IFPE - CAMPUS - ABREU E LIMA</option>
									<option value="AF">IFPE - CAMPUS - AFOGADOS</option>
									<option value="BR">IFPE - CAMPUS - BARREIROS</option>
									<option value="BE">IFPE - CAMPUS - BELO JARDIM</option>
									<option value="IG">IFPE - CAMPUS - IGARASSU</option>
									<option value="RC">IFPE - CAMPUS - RECIFE</option>
								</select>
							</div>
							<div class="ui dividing header"></div>
							<center><input type="submit" value="Cadastrar Evento" class="ui green inverted button submit"></center>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</div>	
<br><br>
</body>	
</html>