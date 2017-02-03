<h1 class="titulo"> Adicionar Procedimento </h1>

<?php

  echo $this->Form->create('Procedimento');
  echo $this->Form->input('nome');
  echo $this->Form->input('preco');
  echo $this->Form->end('Salvar');

 ?>

 <?=
   $this->Html->link("Voltar",
    array('controller'=>'usuarios',
    'action' => 'index')); ?>
