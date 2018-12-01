<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
  <script
    src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
  <script src="semantic/dist/semantic.min.js"></script>
<style>
  *{margin:0;padding: 0;}
  body{
    background-color: #ccc;
  }
</style>

</head>
<body>
  <?php require_once 'Navbar.php'; ?>
  <div class="ui container" style="margin-top: 100px;padding: 0px 0px 0px 110px;">
    <div class="ui link cards">
    <?php for ($i=0; $i < 9; $i++): ?>
      <div class="card">
          <div class="image">
            <a class="ui green ribbon label" style="position:absolute;z-index: 10; margin-left: 15px;margin-top: 120px;">10:20 Ás 10:30</a>
            <img src="../_imagem/_eventos/vikings.jpg">
          </div>
          <div class="content" style="text-align: center;">
            <div class="header">Matt Giampietro</div>
              <div class="description">
                  Matthew is an interior designer living in New York.
            </div>
           </div>
           <div class="extra content">
              <button class="ui green fluid button"><i class="calendar icon"></i> Consultar Evento</button>
            </div>
        </div>
    <?php endfor; ?>
      </div>
  </div>
</body>