<h1 class="titulo"> Comprar Produto </h1>

<?php

  echo $this->Form->create('Compra');
  echo $this->Form->select('produto_id', $produtos);
  echo $this->Form->input('quantidade');
  echo $this->Form->input('data');
  echo $this->Form->end('Salvar');

 ?>

 <?=
   $this->Html->link("Voltar",
    array('controller'=>'clientes',
    'action' => 'index')); ?>
