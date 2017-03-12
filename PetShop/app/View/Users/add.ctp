<html>

<h1> Cadastro Novo Usuário </h1> <br/>
<h2> Nome </h2>

<?php

  echo $this->Form->create('User');
  echo $this->Form->imput('nome');
  echo $this->Form->input('email');
  echo $this->Form->input('senha');
  echo $this->Form->input('tipo');
  echo $this->Form->end('Salvar');

 ?>

 <?=
   $this->Html->link("Voltar",
    array('controller'=>'users',
    'action' => 'index')); ?>

</html>
