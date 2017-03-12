<h1 class="titulo"> Login </h1>

<?php

  echo $this->Form->create('User', array('controller'=>'users', 'url'=>'login'));
  echo $this->Form->input('email');
  echo $this->Form->password('senha');
  echo $this->Form->end('Acessar');

?>

 <?= $this->Html->link("Voltar",
  array('controller'=>'pages',
  'action' => 'home')); ?>
