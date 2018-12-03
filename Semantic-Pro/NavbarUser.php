  <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
  <script src="semantic/dist/semantic.min.js"></script>
  <?php include 'sidebar.php' ?>
  <!-- Navbar fixa -->
  <div class="ui fixed borderless menu" id="menu">
    <!-- definindo uma imagem de logo -->
    <a href="index.php" class="image item">
      <img src="../_imagem/_icone/ifpe.png" alt="">
    </a>
    <!-- parte do dropdown -->
    <div class="ui dropdown item" style="color:green">
      <i class="calendar green icon"></i> Eventos
      <i class="dropdown green icon"></i>
      <div class="menu">
         <a class="item" href="cadastrarEvento.php"><i class="plus green icon"></i>Criar Evento</a>
         <a class="item" href="adicionarEventos.php"><i class="calendar green icon"></i>Meus Eventos</a>
         <a class="item" href="index.php"><i class="calendar green icon"></i>Ver Eventos</a>
      </div>
    </div>

    <div class="right menu">
        <a  class="item" style="color: green;" id="user"><i class="ui user icon"></i>J.R</a>
    </div>
    
    </div>
  </div>
  <script>
    $('.dropdown')
      .dropdown({
       on:'hover',
       transition: 'slide down',
     
     });
      $('#user').click(function(){
        $('.ui.sidebar').sidebar('toggle');
      });
  </script>
