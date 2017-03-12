
<h1 class="titulo"> AREA ADMINISTRATIVA </h1>
<div class="row"> <!-- linha para menu -->

      <div class="col-sm-8">
        <ul class="nav nav-tabs">

          <li> <?= $this->Html->link("Cadastrar Produto",
          array('controller'=>'produtos',
          'action' => 'add')); ?> </li>
          <li> <?= $this->Html->link("Listar Produtos",
          array('controller'=>'produtos',
          'action' => 'listar')); ?> </li>
          <li> <?= $this->Html->link("Cadastrar User",
          array('controller'=>'users',
          'action' => 'add')); ?> </li>
          <li> <?= $this->Html->link("Voltar",
          array('controller'=>'pages',
          'action' => 'home')); ?> </li>
          <li> <?php echo $this->Html->link("Sair",
            array('controller' => 'users',
                  'action' => 'logout'));
             ?>
          </li>
        </ul>
      </div>
    </div>
