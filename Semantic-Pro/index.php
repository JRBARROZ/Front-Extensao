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
  <?php require_once 'Navbar.php'; ?>
  <div class="ui container">
    <div class="ui link cards" >
    <?php for ($i=0; $i < 6; $i++): ?>
      <div class="card" style="padding: 3px;">
            <a class="ui green ribbon label" style="position:absolute;z-index: 10; margin-left: 13px;margin-top: 10px;">10:20 Ás 10:30</a>
          <div class="image">
            <img src="../_imagem/_eventos/vikings.jpg">
          </div>
          <div class="content" style="text-align: center;">
            <div class="header">Matt Giampietro</div>
              <div class="description">
                  Matthew is an interior designer living in New York.
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