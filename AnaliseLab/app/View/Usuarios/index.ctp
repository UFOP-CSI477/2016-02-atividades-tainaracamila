<h1 class="titulo"> AREA DO USUÁRIO </h1>

<div class="row"> <!-- linha para menu -->

      <div class="col-sm-12">
        <ul class="nav nav-tabs">
          <li><?= $this->Html->link("Cadastrar User",
           array('controller'=>'usuarios',
           'action' => 'add')); ?></li>
          <li><?= $this->Html->link("Cadastrar Proc",
           array('controller'=>'procedimentos',
           'action' => 'add')); ?></li>
          <li><?= $this->Html->link("Exames por Proc",
           array('controller'=>'exames',
           'action' => 'relatoriop')); ?></li>
          <li><?= $this->Html->link("Pacientes",
           array('controller'=>'pacientes',
           'action' => 'listar')); ?></li>
           <li> <?= $this->Html->link("Procedimentos",
             array('controller'=>'procedimentos',
             'action' => 'index')); ?></li>
            <li> <?= $this->Html->link("Voltar",
              array('controller'=>'pages',
              'action' => 'home')); ?> </li>
            <li> <?php echo $this->Html->link("Sair",
              	array('controller' => 'usuarios',
              				'action' => 'logout'));?></li>
        </ul>
      </div>
  </div>
<p class="texto">Navegue entre os menus para acessar as funcionalidades do sistema!</p>
