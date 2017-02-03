<h1 class="titulo"> AREA DO PACIENTE </h1>
<div class="row"> <!-- linha para menu -->

      <div class="col-sm-8">
        <ul class="nav nav-tabs">
          <li> <?= $this->Html->link("Solicitar Exame",
          array('controller'=>'exames',
          'action' => 'add')); ?> </li>
          <li> <?= $this->Html->link("Exames",
          array('controller'=>'exames',
          'action' => 'index')); ?> </li>
          <li> <?= $this->Html->link("Voltar",
          array('controller'=>'pages',
          'action' => 'home')); ?> </li>
          <li> <?php echo $this->Html->link("Sair",
        		array('controller' => 'pacientes',
        					'action' => 'logout'));
        		 ?>
          </li>
        </ul>
      </div>
    </div>
