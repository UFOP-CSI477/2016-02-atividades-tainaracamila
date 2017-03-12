<h1> Adicionar Produto </h1>

<?php

  echo $this->Form->create('Produto');
  echo $this->Form->input('nome');
  echo $this->Form->input('preco');
  echo $this->Form->input('imagem');
  echo $this->Form->end('Salvar');

 ?>

 <?=
   $this->Html->link("Voltar",
    array('controller'=>'users',
    'action' => 'index')); ?>
