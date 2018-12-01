  <!-- Navbar fixa -->
  <div class="ui fixed menu">
    <!-- definindo uma imagem de logo -->
    <a href="" class="image item">
      <img src="../_imagem/_icone/ifpe.png" alt="">
    </a>
    <!-- parte do dropdown -->
    <a class="ui dropdown item" style="color:green">
      <i class="calendar green icon"></i> Eventos
      <i class="dropdown green icon"></i>
      <div class="menu">
         <div class="item"><i class="plus green icon"></i> Criar Eventos</div>
         <div class="item"><i class="calendar green icon"></i> Meus Eventos</div>
         <div class="item"><i class="calendar green icon"></i> Ver Eventos</div>
      </div>
    </a>

    <div class="right menu">
        <a href="" class="item" style="color: green;">Login</a>
        <a href="" class="active item" style="color: green;">Registrar</a>
    </div>
    
    </div>
  </div>
  <script>
    $('.dropdown')
      .dropdown({
       on:'hover',
       transition: 'slide down'
     });
  </script>
