<h1 class="titulo"> Acesso ao sistema </h1>

<?php

  echo $this->Form->create('Paciente', array('controller'=>'pacientes', 'url'=>'login'));
  echo $this->Form->input('login');
  echo $this->Form->password('senha');
  echo $this->Form->end('Acessar');

?>

<?= $this->Html->link("Cadastrar",
 array('controller'=>'pacientes',
 'action' => 'add')); ?>

 <?= $this->Html->link("Voltar",
  array('controller'=>'pages',
  'action' => 'home')); ?>
