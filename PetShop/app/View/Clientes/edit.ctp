<h1> Editar Cliente </h1>

<?php

  echo $this->Form->create('Cliente');
  echo $this->Form->input('id');
  echo $this->Form->input('nome');
  echo $this->Form->input('email');
  echo $this->Form->input('senha');
  echo $this->Form->end('Salvar');


 ?>
