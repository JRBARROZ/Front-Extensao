<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	<style>
	.container{
		margin-left: 100px;
		margin-top: 100px;
	}
	.ui.ribbon.label{
		z-index: 1000;
	}
	.ui.container{
		width: 100%;
		max-width: 400px;
	}
	.ui.link.cards{
		margin: 1px;
		text-align: center;
	}
</style>
</head>
<body>
	<table>
		<?php for ($i=0; $i < 3; $i++): ?>
			<tr>
				<?php for ($j=0; $j < 3; $j++): ?>
					<td>
						<a href="#">
							<div class="ui link cards">
								<div class="green card">
									<div class="ui fluid image">
										<label class="ui green ribbon label">20:00 Ás 10:00</label>		
										<div class="image">
											<img src="download.jpeg" class="ui massive image">
										</div>
									</div>
									<div class="content">
										<div class="header"><center>(Nome Evento)</center></div>
										<div class="description ">
											<center>
												<h5>
														Evento XXX Com o objetivo de XXXX ...
												</h5>
											</center>	
										</div>
									</div>
									<div class="extra content">
										<div class="right floated">
											<div class="ui green inverted button">
												<i class="calendar icon"></i>
												Consultar
											</div>
										</div>
										<div class="ui green inverted button">
											<i class="edit icon"></i>
											Editar
										</div>
									</div>
								</div>
							</div> 
						</a>
					</td>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
	</table>	 
</body>
</html>
