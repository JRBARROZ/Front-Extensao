<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
<style>
  *{margin:0;padding: 0;}
  body{background-color: #ccc;}
  /*footer{background-color:darkgreen; color: white;display: flex;justify-content: center;margin-top: 20px;padding: 10px; width: 100%;position:}*/
  .ui.container{
    margin-top: 100px;
    padding: 0px 0px 0px 110px;
  }
  @media only screen and (max-width: 600px) {
    .ui.container{
      padding: 0px 0px 0px 35px;
    }
}
</style>

</head>
<body>
	<?php 
	$image = ['../_imagem/_eventos/entec.png', '../_imagem/_eventos/chess.png', '../_imagem/_eventos/logmaster.png','../_imagem/_eventos/ifpe.png','../_imagem/_eventos/ifpe.png' ];

	$datas = ['10:20 Ás 13:50 19/12/2018', '13:20 Ás 15:50 23/12/2018', '14:20 Ás 16:30 28/12/2018', '15:20 Ás 16:30 30/12/2018', '18:20 Ás 20:30 01/01/2019'];
	shuffle($datas);
	 ?>
  <?php require_once 'Navbar.php'; ?>
  <div class="ui container">
    <div class="ui link cards" >
    <?php for ($i=0; $i < sizeof($image); $i++): ?>
      <div class="card" style="padding: 3px;">
            <a class="ui green ribbon label" style="position:absolute;z-index: 10; margin-left: 13px;margin-top: 10px;"><?php echo $datas[$i];?></a>
          <div class="image">
            <img src=<?php echo "$image[$i]";?>>
          </div>
          <div class="content" style="text-align: center;">
            <div class="header"><?php switch ($i) {
            	case '0':
            		echo "Entec 2017";
            		break;
            	
            	case '1':
            		echo "Encontro médico 2018";
            		break;
            	case '2':
            		echo "Logmaster 2018";
            	break;
            	default:
            		echo "Evento IFPE 2018";
            	break;	
            } ?></div>
              <div class="description">
                  Lorem ipsum dolor inpsum dot fla rog fus ro dah dovaki.
            </div>
           </div>
           <div class="extra content">
              <a href="detalhesEventos.php"><button class="ui green fluid button"><i class="calendar icon"></i><span class="ui inverted">Consultar Evento</span></button></a>
            </div>
        </div>
    <?php endfor; ?>
      </div>
  </div>
  <?php include 'footer.php'; ?>  
</body>