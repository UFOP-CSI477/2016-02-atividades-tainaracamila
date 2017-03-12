<html>

<h1> Cadastro Novo Cliente </h1> <br/>
<h2> Nome </h2>

<?php

  echo $this->Form->create('Cliente');
  echo $this->Form->imput('nome');
  echo $this->Form->input('email');
  echo $this->Form->input('senha');
  echo $this->Form->end('Salvar');

 ?>

 <?=
   $this->Html->link("Voltar",
    array('controller'=>'pages',
    'action' => 'home')); ?>

</html>
