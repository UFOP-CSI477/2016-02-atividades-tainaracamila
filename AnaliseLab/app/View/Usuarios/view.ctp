<h1 class="titulo"> <?= $usuario['Usuario']['nome'] ?> </h1>

<p>Codigo: <?= $usuario['Usuario']['id']; ?> </p>
<p>Nome: <?= $usuario['Usuario']['nome']; ?> </p>
<p>Tipo: <?= $usuario['Usuario']['tipo']; ?> </p>

<?=
  $this->Html->link("Voltar",
  array('controller'=>'usuarios','action'=>'index'));

?>
