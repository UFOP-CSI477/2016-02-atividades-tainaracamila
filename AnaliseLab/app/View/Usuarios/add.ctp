<h1 class="titulo"> Cadastro de Usuário </h1>

<?php
  echo $this->Form->create('Usuario');
  echo $this->Form->input('nome');
  echo $this->Form->input('login');
  echo $this->Form->input('senha');
  echo $this->Form->input('tipo');
  echo $this->Form->end('Salvar');

?>

<?=
  $this->Html->link("Voltar",
   array('controller'=>'usuarios',
   'action' => 'index')); ?>
