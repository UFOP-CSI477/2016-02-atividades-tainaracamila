<h1 class="titulo"> Login </h1>

<?php

  echo $this->Form->create('Cliente', array('controller'=>'clientes', 'url'=>'login'));
  echo $this->Form->input('email');
  echo $this->Form->password('senha');
  echo $this->Form->end('Acessar');

?>

<?= $this->Html->link("Cadastrar",
 array('controller'=>'clientes',
 'action' => 'add')); ?>

 <?= $this->Html->link("Voltar",
  array('controller'=>'pages',
  'action' => 'home')); ?>
