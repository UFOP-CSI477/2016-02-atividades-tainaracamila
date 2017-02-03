<h1 class="titulo"> Cadastro de Paciente </h1>

<?php

  echo $this->Form->create('Paciente');
  echo $this->Form->input('nome');
  echo $this->Form->input('login');
  echo $this->Form->input('senha');
  echo $this->Form->end('Salvar');


 ?>

 <?=
   $this->Html->link("Voltar",
    array('controller'=>'pages',
    'action' => 'home')); ?>
