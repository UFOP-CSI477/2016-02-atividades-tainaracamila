<h1 class="titulo"> Solicitação de Exame </h1>

<?php

  echo $this->Form->create('Exame');
  echo $this->Form->select('procedimento_id', $procedimentos);
  echo $this->Form->input('data');
  echo $this->Form->end('Salvar');

 ?>

 <?=
   $this->Html->link("Voltar",
    array('controller'=>'pacientes',
    'action' => 'index')); ?>
