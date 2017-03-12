<h1 class="titulo"> Editar Produto </h1>

<?php

  $user=$this->Session->read('User');

  echo $this->Form->create('Produto');
  echo $this->Form->input('id');
  if($user[0]['User']['tipo']!=1) {
    echo $this->Form->input('preco');
    echo $this->Form->input('imagem');
    echo $this->Form->end('Salvar');
  } else {
  echo $this->Form->input('nome');
  echo $this->Form->input('preco');
  echo $this->Form->input('imagem');
  echo $this->Form->end('Salvar');
  }

 ?>
