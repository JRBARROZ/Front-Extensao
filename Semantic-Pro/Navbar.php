<script src="semantic/dist/jquery-3.3.1.min.js" ></script>
<script src="semantic/dist/semantic.min.js"></script>
<!-- Navbar fixa -->
<div class="ui fixed borderless menu">
<!-- definindo uma imagem de logo -->
  <a href="index.php" class="image item">
    <img src="../_imagem/_icone/ifpe.png" alt="">
  </a>
  <!-- parte do dropdown -->
  <div class="ui dropdown item" style="color:green">
    <i class="calendar green icon"></i> Eventos
    <i class="dropdown green icon"></i>
    <div class="menu">
      <!-- <a class="item" href="cadastrarEvento.php"><i class="plus green icon"></i>Criar Evento</a> -->
  <!-- <a class="item" href=""><i class="calendar green icon"></i>Meus Eventos</a> -->
      <a class="item" href="index.php"><i class="calendar green icon"></i>Ver Eventos</a>
    </div>
  </div>
  <div class="right menu">
    <a href="login.php" class="item" style="color: green;"><i class="sign in icon"></i>Login</a>
    <a href="cadastro.php" class="item" style="color: green;"><i class="ui user plus icon"></i>Registrar</a>
  </div>

</div>
<script>
  $('.dropdown')
  .dropdown({
  on:'hover',
  transition: 'slide down'
  });
</script>
