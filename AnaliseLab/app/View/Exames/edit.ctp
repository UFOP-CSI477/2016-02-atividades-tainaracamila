<h1 class="titulo"> Editar Exame </h1>

<?php

  echo $this->Form->create('Exame');
  echo $this->Form->input('id');
  echo $this->Form->select('procedimento_id', $procedimentos);
  echo $this->Form->input('data');
  echo $this->Form->end('Salvar');

 ?>

 <?=
   $this->Html->link("Voltar",
    array('controller'=>'pacientes',
    'action' => 'index')); ?>
