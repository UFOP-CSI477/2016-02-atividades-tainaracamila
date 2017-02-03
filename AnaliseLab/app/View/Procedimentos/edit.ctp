<h1 class="titulo"> Editar Procedimento </h1>

<?php

  $usuario=$this->Session->read('Usuario');

  echo $this->Form->create('Procedimento');
  echo $this->Form->input('id');
  if($usuario[0]['Usuario']['nome']!="Administrador") {
    echo $this->Form->input('preco');
    echo $this->Form->end('Salvar');
  } else {
  echo $this->Form->input('nome');
  echo $this->Form->input('preco');
  echo $this->Form->end('Salvar');
  }

 ?>
